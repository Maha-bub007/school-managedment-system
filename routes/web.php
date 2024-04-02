<?php

use App\Http\Controllers\homeController;
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
// Homeconteoller start
Route::get('/',[homeController::class,'indexpage']);
Route::get('/about',[homeController::class,'aboutpage']);
Route::get('/admissions',[homeController::class,'admissionpage']);
Route::get('/cours',[homeController::class,'courspage']);
Route::get('/contact',[homeController::class,'contactpage']);
Route::get('/singleCours',[homeController::class,'singleCoursPage']);
Route::get('/front-login',[homeController::class,'loginPage']);
Route::get('/front-register',[homeController::class,'registerPage']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
