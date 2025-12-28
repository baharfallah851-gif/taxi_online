<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//home
Route::get('home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');


//login
Route::get('/login',[\App\Http\Controllers\LoginController::class,'form'])->name('login.form');
Route::post('/login',[\App\Http\Controllers\LoginController::class,'enter'])->name('login.enter');


//dashboard
Route::get('dashboard',[\App\Http\Controllers\DashboardController::class,'dashboard'])->name('dashboard');



//admin
Route::get('admin/add',[\App\Http\Controllers\LoginController::class,'add'])->name('admin.add');
Route::post('admin/save',[\App\Http\Controllers\LoginController::class,'save'])->name('admin.save');
Route::get('admin',[\App\Http\Controllers\LoginController::class,'index'])->name('admin.index');

