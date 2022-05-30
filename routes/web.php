<?php

use App\Http\Controllers\QueryApiRestController;
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


//Auth::routes();


//Route::resource('api', 'App\Http\Controllers\QueryApiRestController');



Route::get('/api/list', [QueryApiRestController::class, 'list']);

Route::get('/', function () {
    return view('index');
});

// Route::get(
//     '/clients', 
//     [ClienteController::class, 'clients']
// ); 