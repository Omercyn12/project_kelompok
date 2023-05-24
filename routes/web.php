<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


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


// Route::get('/unggah', [HomeController::class, 'index'])->name('unggah');

// Route::post('/login_proses', [HomeController::class, 'login_proses'])->name('login_proses');

// Route::get('/logout', [HomeController::class, 'logout'])->name('logout');

// Route::get('/register', [HomeController::class, 'index'])->name('register');
// Route::post('/register_proses', [HomeController::class, 'register_proses'])->name('register_proses');

// Auth::routes();


// Route::group(['[refix' => 'admin', 'middleware' => ['auth'], 'as' => 'admin.'], function(){


    Route::get('/', function () {
        return view('dashboard');
    });

    Route::get('/Candi', function(){
        return view('Candi_Arjuna');
    });

    Route::get('/Tuk_Bimalukar', function(){
        return view('Tuk_Bimalukar');
    });

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

