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
        dd($city);
    }
}
