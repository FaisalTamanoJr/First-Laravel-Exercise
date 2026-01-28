<?php

use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;


Route::redirect('/','/users');
Route::get('/users',[UsersController::class,'index']);

Route::get('/registration',[RegistrationController::class,'index']);
Route::post('/registration',[RegistrationController::class,'store']);