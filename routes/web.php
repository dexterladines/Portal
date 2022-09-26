<?php

use App\Http\Controllers\Admin\EmployeeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

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
    return redirect()->route('login');
});

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//ADMIN
Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware(['auth','can:admin-access'])->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::get('/reset-password', 'AdminController@reset_password')->name('reset-password');
    Route::put('/update-password', 'AdminController@update_password')->name('update-password');

// Routes for employees //
Route::get('/employees/list-employees', [EmployeeController::class, 'index'])->name('employees.index');
Route::get('/employees/add-employee', [EmployeeController::class, 'create'])->name('employees.create');
Route::post('/employees', [EmployeeController::class, 'store'])->name('employees.store');
Route::get('/employees/profile/{employee_id}', [EmployeeController::class, 'show'])->name('employees.profile');
Route::delete('/employees/{employee_id}', 'EmployeeController@destroy')->name('employees.delete');
});

//USER
Route::namespace('Employee')->prefix('employee')->name('employee.')->middleware(['auth','can:employee-access'])->group(function () {
    Route::get('/', [App\Http\Controllers\Employee\EmployeeController::class, 'index'])->name('index');
    Route::get('/profile', [App\Http\Controllers\Employee\EmployeeController::class, 'profile'])->name('profile');
    Route::get('/profile-edit/{employee_id}', [App\Http\Controllers\Employee\EmployeeController::class, 'profile_edit'])->name('profile-edit');
    Route::put('/profile/{employee_id}', [App\Http\Controllers\Employee\EmployeeController::class, 'profile_update'])->name('profile-update');

});    