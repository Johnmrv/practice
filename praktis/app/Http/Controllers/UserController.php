<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;

        $validated = $request->validate([
            'name' => 'required|min:3|max:50',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ],
         [
        'name.required' => 'Full Name is required!' ,
        'name.min' => $name . ' Full Name must be greater than 3 required! ' ,
        'name.max' => $name . ' Full Name must be less than 50 required! ' ,

        'email.required' => 'Email is required',
        'email.email' => 'Di pedi yung email na ' . $email ."!",

        'password.required' =>  'Password is Missing!',
        'password.min' =>  $password . 'Password must be greater than 5!',
        'password.confirmed' =>  $password . ' Mali yung password',



         ]
        );
        return back()->with('success', 'Registration successful!');
    }

}
