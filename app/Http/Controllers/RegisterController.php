<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class RegisterController extends Controller
{
    public function create()
    {
        return view('contact.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        User::create([
            'fname' => $input['fname'],
            'lname' => $input['lname'],
            'mobile' => $input['mobile'],
            'email' => $input['email'],
            'password' => Hash::make($input['password'])
        ]);
        return view('contact.thanks');
    }
}
