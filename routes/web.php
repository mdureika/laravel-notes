<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/notes', function () {
//     return view('index');
// });

Route::get('/notes', [NoteController::class, 'index']);
