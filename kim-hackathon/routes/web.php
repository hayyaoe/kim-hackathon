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
    return view('index');
});

Route::resource('Admin', AdminController::class);

Route::get('/sidebar', function () {
    return view('components.dummy');
});

Route::get('/admin', function () {
    return view('admins.admin_dash');
});


