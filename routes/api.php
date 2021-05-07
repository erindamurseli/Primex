<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ContenttController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\EditAboutController;
use App\Http\Controllers\EditContactController;
use App\Http\Controllers\EditCarddController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|php
*/
   



Route::post('/register', [LoginController::class, 'register']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/login', [LoginController::class, 'login']);

Route::get('/content',[ContenttController::class, 'index']);
Route::get('/editcontent/{id}', [ContenttController::class, 'show']);
Route::put('/editcontent/{id}', [ContenttController::class, 'update']);

Route::get('/cardd',[EditCarddController::class, 'index']);
Route::get('/editcardd/{id}', [EditCarddController::class, 'show']);
Route::put('/editcardd/{id}', [EditCarddController::class, 'update']);


Route::get('/contact',[EditContactController::class, 'index']);
Route::get('/editcontact/{id}', [EditContactController::class, 'show']);
Route::put('/editcontact/{id}', [EditContactController::class, 'update']);

Route::get('/card',[EditController::class, 'index']);
Route::get('/editcard/{id}', [EditController::class, 'show']);
Route::put('/editcard/{id}', [EditController::class, 'update']);

Route::get('/about',[EditAboutController::class, 'index']);
Route::get('/editabout/{id}', [EditAboutController::class, 'show']);
Route::put('/editabout/{id}', [EditAboutController::class, 'update']);

Route::delete('/deletecard/{id}', [EditController::class, 'destroy']);

Route::post('/addcontent', [ContenttController::class, 'store']);
Route::delete('/deletecontent/{id}', [ContenttController::class, 'destroy']);


Route::patch('/home/{id}', [AdminController::class, 'update']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();

    
});

