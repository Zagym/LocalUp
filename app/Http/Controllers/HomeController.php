<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Booking;
use App\Module;
use App\Level;
use App\Local;
class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locals = Local::All()->sortByDesc('id')->values()->slice(0,4);
        return view('home', ["locals" => $locals]);
    }

    public function admin()
    {
        $locals = Local::All();
        return view('admin.home', ["locals" => $locals]);
    }
}
