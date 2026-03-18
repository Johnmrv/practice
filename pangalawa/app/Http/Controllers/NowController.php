<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NowController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('formview');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function registration(Request $request)
    {
        $name = $request -> name;
        $email = $request -> email;
        $bdate = $request -> bdate;
        $addr = $request -> addr;

        $validate = $request -> validate([
            'name' => 'required|min:5|max:100',
            'email' => 'required|email|unique:users,email',
            'bdate' => 'required|date',
            'addr' => 'required|min:5'
        ],
        [
            'addr.required' => 'Address is required po'
        ]
        );

        $bdateS = strtotime($request -> bdate);
        $now = time();

        $agePre = $now - $bdateS;

        $age = floor($agePre / 31557600);

        $data =[
       'name' => $request -> name,
        'email' => $request -> email,
        'bdate' => $request -> bdate,
        'addr' => $request -> addr,
        'age' => $age

        
        ];


        return view('display', compact('data'));

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
