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
//Admin Login Routes
Route::get('login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::post('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Admin Dashboard Routs 
//Companies
Route::get('/companies', [App\Http\Controllers\Company\CompaniesController::class, 'index'])->name('companies');
Route::get('/companies/create', [App\Http\Controllers\Company\CompaniesController::class, 'create'])->name('companies.create');
Route::post('/companies/store', [App\Http\Controllers\Company\CompaniesController::class, 'store']);
Route::get('/companies/{id}', [App\Http\Controllers\Company\CompaniesController::class, 'show']);
Route::get('/companies/edit/{id}', [App\Http\Controllers\Company\CompaniesController::class, 'edit']);
Route::put('/companies/{id}', [App\Http\Controllers\Company\CompaniesController::class, 'update']);
Route::delete('/companies/delete/{id}', [App\Http\Controllers\Company\CompaniesController::class, 'destroy']);

//Employees
Route::get('/employee', [App\Http\Controllers\Employee\EmployeesController::class, 'index'])->name('employees');
Route::get('/employee/create', [App\Http\Controllers\Employee\EmployeesController::class, 'create'])->name('employee.create');
Route::post('/employees/store', [App\Http\Controllers\Employee\EmployeesController::class, 'store']);
Route::get('/employees/{id}', [App\Http\Controllers\Employee\EmployeesController::class, 'show']);
Route::get('/employees/edit/{id}', [App\Http\Controllers\Employee\EmployeesController::class, 'edit']);
Route::put('/employees/{id}', [App\Http\Controllers\Employee\EmployeesController::class, 'update']);
Route::delete('/employees/delete/{id}', [App\Http\Controllers\Employee\EmployeesController::class, 'destroy']);