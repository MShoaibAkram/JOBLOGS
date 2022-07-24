<?php

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

Route::post('admin/users', [\App\Http\Controllers\Api\Admin\UsersController::class, 'index']);
Route::post('admin/users/trashed', [\App\Http\Controllers\Api\Admin\UsersController::class, 'trashed']);

Route::post('admin/jobs', [\App\Http\Controllers\Api\Admin\JobsController::class, 'index']);
Route::post('admin/jobs/attachment', [\App\Http\Controllers\Api\Admin\JobsController::class, 'attachFile']);
Route::post('admin/jobs/trashed', [\App\Http\Controllers\Api\Admin\JobsController::class, 'trashed']);

Route::post('admin/clients', [\App\Http\Controllers\Api\Admin\ClientsController::class, 'index']);

Route::post('admin/companies', [\App\Http\Controllers\Api\Admin\CompanyController::class, 'index']);
