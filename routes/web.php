<?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\Auth\AuthController;
    use App\Http\Controllers\DatabaseController;
use Monolog\Handler\RotatingFileHandler;

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
        return view('/auth/login');
    });
    Route::post('/auth/login', [AuthController::class, 'login'])->name('login');
    Route::get('logout', '\App\Http\Controllers\Auth\AuthController@logout')->name('logout');

    Route::get("/register", function () {
        return view('register');
    });
    Route::post('register', [AuthController::class, 'register'])->name('register');
    Route::get('register', '\App\Http\Controllers\Auth\AuthController@register')->name('register');

    Route::controller(AuthController::class)->group(function () {
        Route::get('register', 'register')->name('register');
    });
    /*
    Route::get("/dashboard", function () {
            return view('table/table_dashboard');
        });
    */

    Route::get("/request", function () {
        return view('table/table_request');
    });
    Route::get("/attendance", function () {
        return view('table/table_attendance');
    });

    Route::resource('/dashboard', DatabaseController::class);

    Route::get("/edit", function(){
        return view('/edit');
    });
    Route::get("/view", function(){
        return view('table/view');
    });

    Route::get("/leaverequest",function(){
        return view('employee/emp_leavereq');
    });
    Route::get("/listofleave",function(){
        return view('employee/emp_listleave');
    });
    Route::get("profile",function(){
        return view('employee/content/emp_profile');
    });

//For adding an image
Route::get('/add-image',[DatabaseController::class,'addImage'])->name('images.add');

//For storing an image
Route::post('/store-image',[DatabaseController::class,'storeImage'])
->name('images.store');

//For showing an image
Route::get('/view-image',[DatabaseController::class,'viewImage'])->name('images.view');

Route::post('register',[DatabaseController::class,'imageUpload']);
