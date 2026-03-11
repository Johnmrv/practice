<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NowController extends Controller
{

    public function looping()
        {
            return view('loop');
        }

    public function loop(Request $request)
    {
        $row = $request -> row;
        $col  = $request -> col;

        for ($i = 1; $i <= $row; $i++){
            for ($j = 1; $j <= $col; $j++){
                echo $i * $j;
                echo " ";
            }
            echo "<br>";
        }
    }

    public function registartion(Request $request){
        $name = $request -> name;
        $email = $request -> request;
        $password = $request -> password;

        $validated = $request -> validate([
            'name' => 'required|min:3|max:50',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed'
        ],
            [
            'name.required' => 'Full name is required',
            'name.min' => $name.'Full Name must be greater than 3 required!',
            'name.max' => $name.'Full Name must be less than 50 required!',

            'email.required' => 'Email is Required',
            'email.email' => "Your email . $email . is invalid",

            'password.required' => 'Password is Missing!',
            'password.min' => $password .  'Password must be greater than 5',
            'password.confirmed' => $password . 'Mali yung password',
            ]
        );
        return back()->with('success', 'Registration successful');
    }
}