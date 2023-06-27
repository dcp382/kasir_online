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



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dash',function(){
    return view('dashboard.dashboard');
});

Route::group(['middelware' => ['auth']],function (){
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::prefix('/admin')->name('admin')->group(function (){
    Route::get('/dashboard',)->name('admin.dashboard');
});

require __DIR__.'/auth.php';
