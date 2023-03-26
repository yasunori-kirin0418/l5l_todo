<?php

use Illuminate\Support\Facades\Route;
use Modules\Task\Http\Controllers\Task\Create;
use Modules\Task\Http\Controllers\Task\Index;
use Modules\Task\Http\Controllers\Task\Show;

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
    Route::get('/', Index::class)->name('index');
    Route::get('/{id}', Show::class)->name('show');
    Route::post('/', Create::class)->name('create');
});
