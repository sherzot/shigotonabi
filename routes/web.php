<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/', function () {
//     return view('index');
// });


Route::get('/', [PageController::class, 'main']);
