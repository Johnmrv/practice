<?php

use App\Http\Controllers\NowController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('lol',[ PostController::class,'index2'] );
Route::post('pass',[PostController::class,'store']);


Route::get('/contect', function(){ 

return view('Contect',['name' => 'John']);

});

Route::get('/about',[PostController::class,'display']);

Route::get('/details',[PostController::class,'details']);

Route::get('/details',[StudentController::class, 'display']);

Route::get('/info/{id}', [PostController::class,'whi']);
Route::get('/loop/{num}', [PostController::class,'loop']); 


Route::get('/each',[StudentController::class,'each']);
//number 1
Route::get('/odev',[NowController::class,'index']);
Route::post('/store',[NowController::class,'store']);
//number 2
Route::get('/loop',[NowController::class,'index2']);
Route::post('/loop',[NowController::class,'loop']);
//num3
Route::get('/login',[NowController::class,'log']);
Route::post('/cred',[NowController::class,'cred']);
//num4
Route::get('/reg',[NowController::class,'index3']);
Route::post('/regis',[NowController::class,'regis']);

// This displays the form (assuming your blade file is 'form.blade.php')
Route::get('/md3', function () {
    return view('md3');
});

// This handles the form submission
Route::post('/md3', [NowController::class, 'md3']);





Route::get('/customer/{id?}/{name?}/{address?}', function ($id = 'No Data', $name = 'No Data', $address = 'No Data') {
    return view('customer', ['id' => $id, 'name' => $name, 'address' => $address]);
});

Route::get('/item/{no?}/{name?}/{price?}', function ($no = 'No Data', $name = 'No Data', $price = 'No Data') {
    return view('item', ['no' => $no, 'name' => $name, 'price' => $price]);
});

Route::get('/order/{name?}/{no?}/{date?}', function ($name = 'No Data', $no = 'No Data', $date = 'No Data') {
    return view('order', ['name' => $name, 'no' => $no, 'date' => $date]);
});

Route::get('/orderdetails/{tno?}/{ono?}/{id?}/{name?}/{price?}/{qty?}', function ($tno = 'No Data', $ono = 'No Data', $id = 'No Data',$name = 'No Data', $price = 'No Data', $qty = 'No Data') {    
    return view('orderdetails', ['tno' => $tno, 'ono' => $ono, 'id' => $id, 'name' => $name, 'price' => $price, 'qty' => $qty]);
});

Route::get('/orderdetails/{tno}/{ono}/{id}/{name}/{price}/{qty}', function ($tno, $ono, $id, $name, $price, $qty) {    
    return view('orderdetails', ['tno' => $tno, 'ono' => $ono, 'id' => $id, 'name' => $name, 'price' => $price, 'qty' => $qty]);
});

// This displays the form (assuming your blade file is 'form.blade.php')
Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});



Route::get('/register', [UserController::class, 'create']);
Route::post('/register', [UserController::class, 'store']) -> name('register.store');

