<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('laravel-check', [UserController::class, 'index']);


