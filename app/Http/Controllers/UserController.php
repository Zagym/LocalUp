<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class UserController extends Controller
{
    public function getUser()
    {
        $currentUser = app('Illuminate\Contracts\Auth\Guard')->user();
        return $currentUser->lastname . " " . $currentUser->firstname;
    }
}
