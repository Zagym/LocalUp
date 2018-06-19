<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function getUser(Request $request)
    {
        $user = $request->user();
        return view('profil', ['user' => $user]);
    }

    public function updateUser(Request $request)
    {
        $user = $request->user();
        $validator = $user->validator($request->all());

        if ($validator->fails()) {
            return redirect('user')
                ->withErrors($validator)
                ->withInput();
        }

        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->address = $request->address;
        $user->city = $request->city;
        $user->zip = $request->zip;
        $user->phone = $request->phone;

        // If the password exist hash, or ignore.
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        $request->session()->flash('success', 'Vos modifications ont bien été prises en compte.');

        return redirect('user');
    }
}
