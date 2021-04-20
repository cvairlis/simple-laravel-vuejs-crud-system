<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\GetDepartmentsController;
use App\Http\Controllers\GetUsersController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// registering many resource controllers at once
Route::resources([
    'users' => UserController::class,
    'departments' => DepartmentController::class,
]);

Route::get('/getUsers', [GetUsersController::class, 'index']);
Route::get('/getDepartments', [GetDepartmentsController::class, 'index']);
