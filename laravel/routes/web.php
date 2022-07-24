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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'role:admin', 'prefix' => 'admin'], function(){
   Route::get('/', function(){
       return view('admin.dashboards.index');
   });

    Route::get('jobs', [\App\Http\Controllers\Admin\JobsController::class, 'index']);
    Route::get('jobs/edit/{id}', [\App\Http\Controllers\Admin\JobsController::class, 'edit']);
    Route::get('jobs/create', [\App\Http\Controllers\Admin\JobsController::class, 'create']);
    Route::post('jobs/store', [\App\Http\Controllers\Admin\JobsController::class, 'store']);
    Route::get('jobs/view/{id}', [\App\Http\Controllers\Admin\JobsController::class, 'view']);
    Route::get('jobs/delete/{id}', [\App\Http\Controllers\Admin\JobsController::class, 'delete']);
    Route::get('jobs/update_status/{jobId}/{statusId}', [\App\Http\Controllers\Admin\JobsController::class, 'updateStatus']);
    Route::get('jobs/trashed', [\App\Http\Controllers\Admin\JobsController::class, 'trashedJobs']);



    Route::group(['prefix'=>'users'], function(){
        Route::get('/', [\App\Http\Controllers\Admin\UsersController::class, 'index']);
        Route::get('trashed', [\App\Http\Controllers\Admin\UsersController::class, 'trashedUser']);
        Route::get('create', [\App\Http\Controllers\Admin\UsersController::class, 'create']);
        Route::post('store', [\App\Http\Controllers\Admin\UsersController::class, 'store']);
    });

    Route::group(['prefix'=>'user'], function(){
        Route::get('edit/{id}', [\App\Http\Controllers\Admin\UsersController::class, 'edit']);
        Route::post('update', [\App\Http\Controllers\Admin\UsersController::class, 'update']);
        Route::get('delete/{id}', [\App\Http\Controllers\Admin\UsersController::class, 'delete']);
        Route::get('restore/{id}', [\App\Http\Controllers\Admin\UsersController::class, 'restore']);
    });




    Route::get('clients', [\App\Http\Controllers\Admin\ClientsController::class, 'index']);
    Route::get('clients/create', [\App\Http\Controllers\Admin\ClientsController::class, 'create']);
    Route::post('clients/store', [\App\Http\Controllers\Admin\ClientsController::class, 'store']);

    Route::get('client/delete/{id}', [\App\Http\Controllers\Admin\ClientsController::class, 'delete']);

    Route::get('client/edit/{id}', [\App\Http\Controllers\Admin\ClientsController::class, 'edit']);
    Route::post('client/update', [\App\Http\Controllers\Admin\ClientsController::class, 'update']);


});
