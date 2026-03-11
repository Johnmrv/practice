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
        return view('odev');
    }

    public function index2()
    {
        return view('loop');
    }

        public function index3()
    {
        return view('details');
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
    public function store(Request $request)
    {
        $num = $request -> num;

        if ($num % 2 == 0){
            echo "The number is even";
        } else {
            echo "The number is odd";
        }

    }

    public function loop(Request $request)
    {
        $row = $request -> row;
        $col = $request -> col;

        for($i = 1; $i <= $row; $i++){
            for ($j = 1; $j <= $col; $j++){
                echo $i * $j;
            }
                echo '<br>';
        }

    }

    public function log(){
        return view('login');
    }

    public function cred(Request $request)
    {
        $user = $request -> user;
        $pass = $request -> pass;

        if($user == 'juan' && $pass == 'petra'){
            echo "<p style='color:green'>Successful</p>";
        }else{
            echo "<p style='color:red'>Unsuccessful</p>";
        }

    }

public function md3(Request $request)
{
    // Validate the incoming data based on the image parameters
    $validated = $request->validate([
        'first_name' => 'required|string|max:50',
        'last_name'  => 'required|string|max:50',
        'sex'        => 'required|in:Male,Female',
        'mobile'     => ['required', 'regex:/^09[0-9]{2}-[0-9]{3}-[0-9]{3}$/'],
        'tel_no'     => 'nullable|numeric',
        'birth_date' => 'required|date|before:today',
        'address'    => 'nullable|string|max:100',
        'email'      => 'nullable|email',
        'website'    => 'nullable|url',
    ]);

    return view('display_details', ['data' => $validated]);
}

    public function regis(Request $request)
    {
        $lname = $request -> lname;
        $fname = $request -> fname;
        $mname = $request -> mname;
        $add = $request -> add;
        $date = $request -> date;

        
            echo "Your name is $fname $mname $lname  from $add birthday on " . date('F j, Y', strtotime($date));
        

    

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
