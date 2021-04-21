<?php

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

##
# Layout Routes --> for testing
##

Route::get('/public_layout', function () {
    return view('layouts.public');
});
Route::get('/admin_layout', function () {
    return view('layouts.admin');
});

##
# Public Routes
##
Route::get('/', function () {
    return view('public.home');
});
Route::get('/about', function () {
    return view('public.about');
});
Route::get('/contact', function () {
    return view('public.contact');
});
Route::get('/admission', function () {
    return view('public.admission');
});

##
# Dashboard routes
##

// Admin Routes
Route::prefix('admin')->group(function () {
    Route::get('/admin', function () {
        Route::resource('admins', AdminController::class);
    });
});
