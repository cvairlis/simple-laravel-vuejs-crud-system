<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\GetDepartmentsController;
use App\Http\Controllers\GetUsersController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () { return view('welcome'); })->name('welcome');

// registering many resource controllers at once
Route::resources([
    'users' => UserController::class,
    'departments' => DepartmentController::class,
]);

Route::get('/getUsers', [GetUsersController::class, 'index']);
Route::get('/getDepartments', [GetDepartmentsController::class, 'index']);
