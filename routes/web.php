<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

// Route::get("/", [ContactController::class, "index"]);
Route::get('/', function () {
    return view('main');
});
