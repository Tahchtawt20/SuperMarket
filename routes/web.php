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


Auth::routes();

Route::get('/responsable_dashboard',[App\Http\Controllers\responsable\DashboardController::class, 'index'])->middleware('role:responsable');
Route::get('/caissier_dashboard', [App\Http\Controllers\caissier\DashboardController::class, 'index'])->middleware('role:caissier');

// employée du stock
Route::get('/stock/dashboard', [App\Http\Controllers\stock\DashboardController::class, 'index'])->middleware('role:stock')->name('index');
Route::get('/stock/create',[App\Http\Controllers\stock\DashboardController::class, 'create'])->name('create');
Route::get('/stock/{id}',[App\Http\Controllers\stock\DashboardController::class, 'show'])->name('show');
Route::put('/stock/{id}',[App\Http\Controllers\stock\DashboardController::class, 'update'])->name('update');
Route::get('/stock/{id}/edit',[App\Http\Controllers\stock\DashboardController::class, 'edit'])->name('edit');
Route::delete('/stock/{id}',[App\Http\Controllers\stock\DashboardController::class, 'destroy'])->name('destroy');
Route::post('/stock/store',[App\Http\Controllers\stock\DashboardController::class, 'store'])->name('store');


Route::get('/responsable_dashboard/fournisseurs',[App\Http\Controllers\responsable\DashboardController::class,'fournisseurs'])->name('fournisseurs');
Route::get('/responsable_dashboard/employes',[App\Http\Controllers\responsable\DashboardController::class,'employes'])->name('employes');
Route::get('/responsable_dashboard/produitsStock',[App\Http\Controllers\responsable\DashboardController::class,'produitsStock'])->name('produitsStock');


//home
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// logout
Route::group(['middleware' => ['auth']], function () {
    Route::get('/logout', [App\Http\Controllers\LogoutController::class, 'perform'])->name('logout');
});