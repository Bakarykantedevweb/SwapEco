<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Auth;
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
    return view('frontend.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Authentification Entreprise
Route::get('/entreprise/register', [App\Http\Controllers\Entreprise\Auth\RegisterController::class, 'showRegistrationForm']);
Route::get('/entreprise/login', [App\Http\Controllers\Entreprise\Auth\LoginController::class, 'showLoginForm']);

Route::prefix('admin')->middleware(['auth'])->group(function(){

    Route::controller(DashboardController::class)->group(function(){
        Route::get('dashboard','index');
    });
});
