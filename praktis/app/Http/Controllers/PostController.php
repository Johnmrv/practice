<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class PostController extends Controller
{

    public function index2()
    {
         return view('post');
    }

    public function store(Request $request)
    {
            $full=$request->full;
            echo"$full";
    }

    public function display(){
        return view('about');
    }

    public function details(){
        return view('admin.details');
    }

    public function display2($id)
    {
        return view('info')->with('id',$id);
    }

    public function loop($num)
    {
        return view('title');
    }

    public function whi($i){
        return view('info');
    }

}
