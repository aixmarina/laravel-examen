<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/robots', function(){
    return index()
})

Route::get('/robots/{id}', function($id){
    return show($id)
})

Route::get('/robots/revisar/{id}', function(){
    return formReview()
})

Route::post('/robots', function(){
    return review()
})
