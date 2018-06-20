<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Booking;
use App\Module;
use App\Level;
use App\Local;
use App\City;
use App\User;
class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$locals = Local::All()->sortByDesc('id')->values()->slice(0,4);
        $locals = Local::whereHas('city', function($query) {
                $query->where('active', 1);
            })
            ->get()
            ->sortByDesc('id')
            ->values()
            ->slice(0,4)
        ;

        return view('home', ["locals" => $locals]);
    }

    public function admin()
    {
        $locals = Local::All()->count();
        $users = User::all()->count();
        $cities = City::all()->count();
        $modules = Module::all()->count();
        $bookings = Booking::all()
        ->where('begins_at','<=',date('Y-m-d'))
        ->where('ends_at','>=',date('Y-m-d'))->count();
        return view('admin.home', ["locals" => $locals, "users" => $users, "cities" => $cities, "modules" => $modules, 'bookings' => $bookings]);
    }
}
