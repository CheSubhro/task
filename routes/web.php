<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Task_module_controller;

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


Route::get('', [Task_module_controller::class ,'index']);

Route::get('show', [Task_module_controller::class ,'show']);

Route::get('create', [Task_module_controller::class ,'create']);

Route::post('store', [Task_module_controller::class ,'store']);


