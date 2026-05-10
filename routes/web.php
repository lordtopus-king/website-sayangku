<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SayangController;

Route::get('/', [SayangController::class, 'index']);