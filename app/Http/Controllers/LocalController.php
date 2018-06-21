<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use App\Local;
use App\City;
use App\Local_Type;
use App\Module;
use App\Flat_Rate;
use App\Flat_Rate_Module;
use Illuminate\Support\Facades\Auth;
use App\Booking_Module;
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
        $modules_bases_ids = Flat_Rate_Module::all();
        $flats_rates_count = Flat_Rate::all()->count();
        $modules = Module::all();
        $modules_bases = array();
        $modules_ex_ids = array();
        $res_ex = array();
        $res = array();
        for ($i=1; $i <= $flats_rates_count; $i++) {
            foreach ($modules_bases_ids as $module_base_id) {
                if ($i == $module_base_id->flat_rate_id) {
                    array_push($res, $modules[$module_base_id->module_id-1]->label);
                    array_push($res_ex, $modules[$module_base_id->module_id-1]->id);
                }
            }
            array_push($modules_ex_ids, $res_ex);
            array_push($modules_bases, $res);
            $res_ex = array();
            $res = array();
        }
        return view('detail', [
            'local' => $local,
            'modules_bases' => $modules_bases,
            'modules' => $modules,
            'modules_ids_ex' => $modules_ex_ids
      ]);
    }
    public function adminOneLocal($id)
    {
         return view('admin.detail.local', ['local' => Local::find($id), 'types' => Local_Type::all(), 'cities' => City::all()]);
    }

    public function create()
    {
        $cities = City::all();
        $types = Local_Type::all();

        return view('admin.create.local', ['cities' => $cities, 'types' => $types]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $local = new Local();
        $validator = $local->validator($request->all());

        if ($validator->fails()) {
            return redirect()->route('admin_local_create')
                ->withErrors($validator)
                ->withInput();
        }

        $local->fill($request->all());

        $local->save();

        return redirect()->route('admin_local', ['local' => $local]);
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

    public function edit(Request $request, Local $local)
    {
        $validator = $local->validator($request->all());

        if ($validator->fails()) {
            return redirect()->route('admin_local', ['local' => $local])
                ->withErrors($validator)
                ->withInput();
        }

        $local->label = $request->label;
        $local->description = $request->description;
        $local->address = $request->address;
        $local->city_id = $request->city_id;
        $local->floor = $request->floor;
        $local->door = $request->door;
        $local->capacity = $request->capacity;
        $local->price = $request->price;
        $local->type_id = $request->type_id;
        if ($request->image_url != null) {
            $name = $request->image_url->store('public/img/local/'. $local->id);
            $local->image_url = str_replace("public/","",$name);
        }

        $local->save();

        $request->session()->flash('success', 'Vos modifications ont bien été prises en compte.');

        return redirect()->route('admin_local', ['local' => $local]);
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
    public function destroy(Local $local)
    {
        Local::destroy($local->id);
        return back();
    }

    public function louer(Request $request, Local $local)
    {

        $booking = new Booking();
        $booking->begins_at = $request->dateDebut;
        $booking->ends_at = $request->datefin;
        $booking->local_id = $local->id;
        $booking->user_id = $request->user()->id;
        $booking->flat_rate_id = $request->offre;
        $booking->save();
        foreach ($request->option as $module) {
            $moduleSupp = new Booking_Module();
            $moduleSupp->bookings_id = $booking->id;
            $moduleSupp->modules_id = $module;
            $modulesSupp->save();
        }
        $modules_bases_ids = Flat_Rate_Module::all();
        $modules = Module::all();
        $modules_bases = array();
        foreach ($modules_bases_ids as $module_base_id) {
            if ($request->offre == $module_base_id->flat_rate_id) {
                array_push($modules_bases, $modules[$module_base_id->module_id-1]->label);
            }
        }
        return view('recap', ['user' => $request->user(), 'local' => $local, 'modules' => $request->option, 'baseModules' => $modules_bases]);
    }

    public function pdf(){
        //Local $local, $modules
        $local = Local::find(1);
        $modules = Module::all();
        $modules_bases_ids = Flat_Rate_Module::all();
        $flats_rates_count = Flat_Rate::all()->count();
        $modules = Module::all();
        $modules_bases = array();
        $res = array();
        for ($i=1; $i <= $flats_rates_count; $i++) {
            foreach ($modules_bases_ids as $module_base_id) {
                if ($i == $module_base_id->flat_rate_id) {
                    array_push($res, $modules[$module_base_id->module_id-1]->label);
                }
            }
            array_push($modules_bases, $res);
            $res = array();
        }
        if (Auth::user() != null) {
            $user = Auth::user();
        }

        return view('pdf.order', ['user' => $user, 'local' => $local, 'modules' => $modules, 'baseModules' => $modules_bases]);


    }
}
