<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function getUser()
    {
        $currentUser = app('Illuminate\Contracts\Auth\Guard')->user();
        return view('profil', ['currentUser' => $currentUser ]);
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
        $user->password = Hash::make($request->password);
        $user->save();

        $request->session()->flash('status', 'Task was successful!');

        return redirect('user');
    }
}
