<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;


Route::redirect('/','/users');
Route::get('/users',[UsersController::class,'index']);