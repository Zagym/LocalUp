<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;

class CityController extends Controller
{
    public function getAllCities()
    {
        $cities = City::All();

        return view('admin.listing.cities', ['cities' => $cities]);
    }

    public function getOneCity(City $city)
    {
        return view('admin.detail.city', ['city' => $city]);
    }

    public function updateCity(Request $request, City $city)
    {
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

    public function destroyCity(Request $request, City $city)
    {
        if (count($city->locals) !== 0) {
            $request->session()->flash('error', sprintf('La ville %s ne peut être supprimée. Des locaux y sont associés.', $city->label));
            return back();
        }

        $request->session()->flash('success', sprintf('La ville %s a bien été supprimée', $city->label));

        City::destroy($city->id);
        return back();
    }
}
