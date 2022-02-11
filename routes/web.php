<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FrontendController;


Route::get('/',[FrontendController::class,'index'])->name('welcome');
Route::get('/about-us',[FrontendController::class,'aboutview'])->name('about');
Route::get('/media-center-for',[FrontendController::class,'mediaview'])->name('media');
Route::get('/media/add',[FrontendController::class,'mediaadd'])->name('media-add');
Route::post('/media/save',[FrontendController::class,'mediasave'])->name('media-save');
Route::get('/contact-us',[FrontendController::class,'contactview'])->name('contact');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
