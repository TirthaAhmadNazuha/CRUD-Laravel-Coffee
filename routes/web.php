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
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CoffeeController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/coffee', [CoffeeController::class, 'index']);
Route::get('/coffee/add', [CoffeeController::class, 'add']);
Route::get('/coffee/save', [CoffeeController::class, 'addCoffee']);
Route::get('/coffee/delete/{id}', [CoffeeController::class, 'deleteCoffee']);
