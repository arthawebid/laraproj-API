<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Api\temanController;

Route::get('/', function () {
    return view('welcome');
});

Route::apiResource('teman', temanController::class );