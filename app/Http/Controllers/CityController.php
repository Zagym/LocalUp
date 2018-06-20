<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;

class CityController extends Controller
{
    public function getAllCities()
    {
        $cities = City::All();

        return view('admin/listing.cities', ['cities' => $cities]);
    }

    public function getOneCity($id)
    {
        $city = City::find($id);
        return view('admin/detail.city', ['city' => $city]);
    }

    public function updateCity(Request $request, $id)
    {
        $city = City::find($id);

        
        if ($request->active) {
            $city->active = true;
        } else {
            $city->active = false;
        }


        $city->label = $request->label;

        $city->save();

        $request->session()->flash('success', 'Vos modifications ont bien été prises en compte.');

        return redirect()->route('admin_city', ['city' => $city]);

    }

    public function destroyCity($id)
    {
        City::destroy($id);
        return back();
    }
}
