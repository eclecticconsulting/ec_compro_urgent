<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::post('/get_msg', [HomeController::class, 'contactGetAPI']);
