<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Level;
use App\Level_Rate;
class LevelController extends Controller
{
    public function index(){
        $levelRates = Level_Rate::all();
        return view('admin.listing.level_rates', ["levelRates" => $levelRates]);
    }
    public function getOneLevel(Level_Rate $level){
        return view('admin.listing.level_rate', ["levelRate" => $level]);
    }
}
