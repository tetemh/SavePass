<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function view(){
        return view('auth.register');
    }

    public function register(Request $request){

        /* -- Get if password and Re-Password Match -- */
        if($request->input('re_password') != $request->input('password')) ed(json_encode(array('success' => false, 'message' => 'Password Not Match')));

        /* -- Get if user already has an account  -- */
        $user = DB::table('sp_users')
            ->where('email', $request->input('email'))
            ->first();

        if($user != null) ed(json_encode(array('success' => false, 'message' => 'You already have an account with this email')));
        DB::table('sp_users')->insert([
            [
                'email' => $request->input('email'),
                'first_name' => $request->input('first_name'),
                'last_name' => $request->input('last_name'),
                'password' => Hash::make($request->input('password')),
                'pass_token' => genToken(128)
            ]
        ]);

        ed(json_encode(array('success' => true, 'message' => 'Your account has been created')));
    }
}
