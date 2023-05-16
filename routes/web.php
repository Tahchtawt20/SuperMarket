<?php

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
    return view('welcome');
});

Route::resource('stock' , App\Http\Controllers\SuperC::class);

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/responsable_dashboard',[App\Http\Controllers\responsable\DashboardController::class, 'index'])->middleware('role:responsable');
Route::get('/caissier_dashboard', [App\Http\Controllers\caissier\DashboardController::class, 'index'])->middleware('role:caissier');
Route::get('/stock_dashboard', [App\Http\Controllers\stock\DashboardController::class, 'index'])->middleware('role:stock');

Route::get('/responsable_dashboard/produitsStock',[App\Http\Controllers\responsable\DashboardController::class,'produitsStock'])->name('produitsStock');

