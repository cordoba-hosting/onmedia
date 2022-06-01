<?php

use App\Http\Controllers\UniversityController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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


Route::post('/filter', [UniversityController::class, 'consumeApi']);
Route::get('/list', [UniversityController::class, 'consumeApi']);

Route::get('/', function () {
    return view('index');
});
