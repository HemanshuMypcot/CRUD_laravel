<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\apiController;
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

Route::get('/', function () {
    return view('Register');
});
Route::post("/adduser",[userController::class,"addUser"]);
Route::view('data','Data');
Route::get('data',[userController::class,'user']);
Route::view('edit/{id}','edit');
Route::view('show/{id}','show');
Route::get('show/{id}',[userController::class,'showData']);
Route::get('delete/{id}',[userController::class,'deleteData']);
Route::get('edit/{id}',[userController::class,'showEditData']);
Route::post('edit',[userController::class,'editData']);




