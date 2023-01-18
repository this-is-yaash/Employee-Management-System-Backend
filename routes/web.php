<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/login', function () {
    return view('admin-login');
});
Route::get("/dashboard", function () {
    return view('emp_dashboard');
});
Route::get("/attendance", function () {
    return view('emp_attendance');
});
Route::get("/request", function () {
    return view('emp_request');
});
Route::get("/logout", function () {
    return view('admin-login');
});
