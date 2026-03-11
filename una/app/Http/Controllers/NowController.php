<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class NowController extends Controller
{

    public function looping()
        {
            return view('loop');
        }

    public function regis()
    {
        return view('register');
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

    public function registration(Request $request){
        $name = $request -> name;
        $email = $request -> email;
        $password = $request -> password;

        $validated = $request -> validate([
            'name' => 'required|min:3|max:50',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed'
        ],
            [
            'name.required' => 'Full name is required',
            'name.min' => 'Full Name must be at least 3 characters',
            'name.max' => 'Full Name must be less than 50 characters',

            'email.required' => 'Email is required',
            'email.email' => 'The email must be a valid email address',

            'password.required' => 'Password is required',
            'password.min' => 'Password must be at least 6 characters',
            'password.confirmed' => 'The password confirmation does not match',
            ]
        );
        return back()->with('success', 'Registration successful');
    }
}