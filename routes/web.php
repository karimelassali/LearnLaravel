<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome',[
        'title' => 'Home',
    ]);
});

Route::get('/about', function () {
    return view('about',[
        'title' => 'About',
    ]);
});

Route::get('/mahasiswa', function () {
    return view('mahasiswa',[
        'title' => 'Mahasiswa',
    ]);
});

Route::get('/{name}', function (Request $request) {
    $name = 'Karim';
    return view('welcome',[
        'title' => $request->name,
        'name' => $name,
    ]);
});


Route::get('/about',function(){
    return 'About Page';
});