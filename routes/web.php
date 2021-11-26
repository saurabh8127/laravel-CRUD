<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CRUDController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

//index route
Route::get('/',[CRUDController::class,'index']);
//insert route
Route::get('/aa',[CRUDController::class,'create']);
Route::post('/insert',[CRUDController::class,'insert'])->name('insert');
//delete route
Route::get('/delete/{id}',[CRUDController::class,'delete']);

// Route::delete('/user/{id}', 'UserController@destroy')