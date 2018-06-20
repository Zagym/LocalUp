<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Local;
use App\City;
use App\Local_Type;

class LocalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAllLocals()
    {
            $locals = Local::whereHas('city', function($query) {
                $query->where('active', 1);
            })
            ->get()
            ->sortByDesc('id')
            ->values()
        ;

        $cities = City::all()->where('active', 1);
        $categories = Local_Type::all();

        return view('listing', ['locals' => $locals, 'cities' => $cities, 'categories' => $categories]);
    }
    public function adminAllLocals()
    {
        $locals = Local::All();
        return view('admin.listing.locals', ['locals' => $locals]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Local $local
     *
     * @return \Illuminate\Http\Response
     */
    public function getOneLocal(Local $local)
    {
         return view('detail', ['local' => $local]);
    }
    public function adminOneLocal($id)
    {
         return view('detail', ['local' => Local::find($id)]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Local::destroy($id);
        return back();
    }
    // public function destroy($id)
    // {
    //     Local::destroy($id);
    //     $locals = Local::All();
    //     $cities = City::all();
    //     $categories = Local_Type::all();
    //
    //     return view('listing', ['locals' => $locals, 'cities' => $cities, 'categories' => $categories]);
    // }
}
