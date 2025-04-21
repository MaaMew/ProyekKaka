<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
//  Route::get('/', function () {
//      return view('welcome');
//  });
 // Route::get('/', function () {
 //     return view('welcome');
 // });


Route::get('/', [ProductController::class,'index']);
Route::get('/product/{id}', [ProductController::class, 'show']);
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::post('/user/store', [UserController::class, 'store'])->name('user.store');


Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
