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

Route::view('/', 'welcome');
Route::view('/examples/basic', 'examples.basic');
Route::view('/examples/custom-component', 'examples.custom-component');
Route::view('/examples/as-form-input', 'examples.as-form-input');
Route::view('/examples/livewire', 'examples.livewire');
