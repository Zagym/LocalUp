<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
}
