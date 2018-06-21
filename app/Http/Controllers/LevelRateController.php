<?php

namespace App\Http\Controllers;
use App\Level_Rate;

use Illuminate\Http\Request;

class LevelRateController extends Controller
{
    public function adminAllLevelRates() {

        $levelRates = Level_Rate::All();

        return view('admin.listing.level_rates', ['levelRates' => $levelRates]);
    }

    public function adminLevelRateUpdate(Level_Rate $levelRate) {

        return view('admin.detail.level_rate', ['levelRate' => $levelRate]);
    }

    public function adminLevelRateStore(Level_Rate $levelRate, Request $request) {

        $levelRate->rates = $request->rate;

        $levelRate->save();

        $request->session()->flash('success', 'Vos modifications ont bien été prises en compte.');

        return redirect()->route('admin_level_rates', ['levelRate' => $levelRate]);
    }
}
