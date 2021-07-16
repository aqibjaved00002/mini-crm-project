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
    return view('Auth\login');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Admin Dashboard Routs 
//Companies
Route::get('/companies', [App\Http\Controllers\Company\CompaniesController::class, 'index'])->name('companies');
Route::get('/companies/create', [App\Http\Controllers\Company\CompaniesController::class, 'create'])->name('companies.create');
Route::post('/companies/store', [App\Http\Controllers\Company\CompaniesController::class, 'store']);
Route::get('/companies/{id}', [App\Http\Controllers\Company\CompaniesController::class, 'show']);
Route::get('/companies/edit/{id}', [App\Http\Controllers\Company\CompaniesController::class, 'edit']);
Route::put('/companies/{id}', [App\Http\Controllers\Company\CompaniesController::class, 'update']);
