<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('about',function(){
  $headline = "this is our heading";
  $para = "this is our paragraph with lots of para";
  return view('about',compact('headline','para'));
});

Route::get('media-center',function(){
  $tv_channels = ['btv','gtv','etv','atn','71','ch-i'];
  return view('media',compact('tv_channels'));
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
