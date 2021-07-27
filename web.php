<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\normalUserController;
use App\Http\Controllers\issueAdd;
use App\Http\Controllers\managerUserController;
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

Route::get('/', function () {
    return view('welcome');
});

//Route::post('',[normalUserController::class,'addIssue']);
Route::post('/create', [normalUserController::class,'addIssue']);

Route::get('normal/{emp_id}',[normalUserController::class,'getNormalUser']);
// Route::view('normal','normalUser');

Route::get('normal/editMobile/{emp_id}',[normalUserController::class,'UpdateMobile']);

Route::post('editMobile',[normalUserController::class,'Update']);

// for manager 
Route::get('manager/{emp_id}',[managerUserController::class,'getManagerUser']);

Route::get('manager/editMobile/{emp_id}',[managerUserController::class,'UpdateMobile']);

Route::post('editMobile',[managerUserController::class,'Update']);

Route::post('/create', [managerUserController::class,'addIssue']);



