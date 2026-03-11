<?php

use App\Http\Controllers\MyController;
use App\Http\Controllers\NowController;
use Illuminate\Support\Facades\Route;

//Pass Data on another view
Route::get('/formsko', function () {
    return view('formsko');
});

Route::post('/store' , [MyController::class, 'store']);


//Required Parameters
Route::get('/required/{name}/{age}/{height}', function($name,$age,$height){
    return view('Rparam', ['name' => $name, 'age' => $age, 'height' => $height]);
});

//Optional Parameters
Route::get('/optional/{name?}/{age?}/{height?}', function($name = 'No Data', $age = 'No Data', $height = 'No Data'){
return view('Oparam', ['name' => $name, 'age' => $age, 'height' => $height]);
});

//Using Controller
Route::get('/loop', [NowController::class,'looping']);
Route::post('/loop', [NowController::class,'loop']);

//Validation
Route::get('/register', [NowController::class, 'regis']);
Route::post('/register', [NowController::class, 'registration']) -> name('register.register');


