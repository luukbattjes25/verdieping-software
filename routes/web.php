<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', TodoController::class . '@index')->name('index');

Route::get('/completed', TodoController::class . '@completed')->name('completed');

Route::get('/complete/{todo}', TodoController::class . '@complete')->name('create');

Route::get('/edit/{todo}', TodoController::class . '@edit')->name('edit');

Route::post('/update/{todo}', TodoController::class . '@update')->name('update');

Route::get('/delete/{todo}', TodoController::class . '@delete')->name('delete');

Route::get('/create', TodoController::class . '@create')->name('create');

Route::post('/store', TodoController::class . '@store')->name('store');

