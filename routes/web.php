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

/**
 * Les Routes pour l'Auth Entreprise
 */
Route::middleware('entreprise.guest')->group(function () {

    Route::get('/entreprise/register', [App\Http\Controllers\Entreprise\Auth\RegisterController::class, 'showRegistrationForm']);
    Route::post('/entreprise/register', [App\Http\Controllers\Entreprise\Auth\RegisterController::class, 'register']);
    Route::get('/entreprise/login', [App\Http\Controllers\Entreprise\Auth\LoginController::class, 'showLoginForm']);
    Route::post('/entreprise/login', [App\Http\Controllers\Entreprise\Auth\LoginController::class, 'login']);
});

Route::middleware('entreprise.auth')->group(function () {
    Route::get('/entreprise/dashboard', [DashboardEntrepriseController::class,'index']);
    Route::post('/entreprise/logout', [App\Http\Controllers\Entreprise\Auth\LoginController::class, 'logout']);
});

// Les Routes pour l'Admin

Route::prefix('admin')->middleware(['auth'])->group(function(){

    Route::controller(DashboardController::class)->group(function(){
        Route::get('dashboard','index');
    });
});

// Les Routes pour les Entreprises

Route::prefix('entreprise')->middleware(['entreprise.auth'])->group(function(){

    Route::controller(TypeOffreController::class)->group(function(){
        Route::get('type-offre','index'); 
     });
});

//contributeur routes

Route::controller(EcoContributeurLoginController::class)->group(function(){
    Route::get('contributeur/login','index')->name('contributeur.login');
    Route::post('contributeur/login','login')->name('contributeur.login.post');
    Route::post('contributeur/logout','logout')->name('contributeur.logout');
});

Route::controller(EcoContributeurRegisterController::class)->group(function(){
    Route::get('contributeur/register','index')->name('contributeur.register');
    Route::post('contributeur/register','register')->name('contributeur.register.post');
});
Route::prefix('contributeur')->middleware('auth:eco_contributeur')->group(function(){
    Route::controller(EcoContributeurDashboardController::class)->group(function(){
        Route::get('dashboard','index')->name('contributeur.dashboard');
    });
});


//Promoteur routes

Route::controller(PromoteurLoginController::class)->group(function(){
    Route::get('promoteur/login','index')->name('promoteur.login');
    Route::post('promoteur/login','login')->name('promoteur.login.post');
    Route::post('promoteur/logout','logout')->name('promoteur.logout');
});

Route::controller(PromoteurRegisterController::class)->group(function(){
    Route::get('promoteur/register','index')->name('promoteur.register');
    Route::post('promoteur/register','register')->name('promoteur.register.post');
});
Route::prefix('promoteur')->middleware('auth:promoteur')->group(function(){

    Route::controller(PromoteurDashboardController::class)->group(function(){
        Route::get('dashboard','index')->name('promoteur.dashboard');
    });
});
