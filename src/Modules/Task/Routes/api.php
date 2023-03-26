<?php

use Illuminate\Support\Facades\Route;
use Modules\Task\Http\Controllers\Task\CreateController;
use Modules\Task\Http\Controllers\Task\DeleteController;
use Modules\Task\Http\Controllers\Task\IndexController;
use Modules\Task\Http\Controllers\Task\ShowController;

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

Route::prefix('/task')->name('task.')->group(function () {
    Route::get('/', IndexController::class)->name('index');
    Route::get('/{id}', ShowController::class)->name('show');
    Route::post('/', CreateController::class)->name('create');
    Route::delete('/{id}', DeleteController::class)->name('delete');
});
