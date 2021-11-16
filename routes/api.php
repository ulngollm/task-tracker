<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TaskController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/employee', [EmployeeController::class, 'getAll']);
Route::post('/employee', [EmployeeController::class, 'add']);
Route::get('/employee/{id}', [EmployeeController::class, 'getOne']);
Route::delete('/employee/{id}', [EmployeeController::class, 'delete']);

Route::get('/role', [RoleController::class, 'getAll']);
Route::post('/role', [RoleController::class, 'add']);

Route::get('/task', [TaskController::class, 'getAll']);
Route::post('/task', [TaskController::class, 'add']);
