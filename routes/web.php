<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\EventoController;

// Route for the home page
Route::get('/', function () {
    return view('welcome');
});

// Authentication routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'processLogin']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Dashboard route
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Product routes
Route::resource('productos', ProductoController::class);
Route::get('/principal', 'PrincipalController@index')->name('principal');
Route::get('/arreglos', 'ArreglosController@index')->name('arreglos');
Route::get('/centros', 'CentrosController@index')->name('centros');
Route::get('/cordilleras', 'CordillerasController@index')->name('cordilleras');
Route::get('/calendario', 'CalendarioController@index')->name('calendario');

Route:: view('/nota','nota');
Route:: view('/arreglos','arreglos');
Route:: view('/centros','centros');


Route::get('/api/events/{year}/{month}', [CalendarController::class, 'getEvents']);
Route::get('/test-mongo', [CalendarController::class, 'testMongoConnection']);
Route::post('/eventos',[EventoController::class, 'store'])->name('eventos.store');

Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('principal', function () {
    return view('principal');
})->middleware('auth');