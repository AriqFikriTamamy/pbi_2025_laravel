<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AddJobApplicationController;
use App\Http\Controllers\ApplicationController;

// Route::get('/', function () {
//     return ['Laravel' => app()->version()];
// });

// Route::get('/dashboard', function () {
//     return ['Laravel' => app()->version()];
// });

require __DIR__ . '/auth.php';

// Route::get('/login', [AuthController::class, 'login'])->name('login');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
Route::post('/register', [RegisterController::class, 'register'])->name('register');

Route::get('/login', [LoginController::class, 'index'])->name('login.index');
// Route::post('/login', 'LoginController@login')->name('login');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
// Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/add-job-application', [AddJobApplicationController::class, 'index'])->name('applications.index');

Route::post('/add-job-application', [ApplicationController::class, 'store'])->name('applications.store');


Route::post('/application', [ApplicationController::class, 'index']);

Route::get('/add-job-application', [AddJobApplicationController::class, 'index'])->name('add-job-application');

