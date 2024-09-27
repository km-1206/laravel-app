<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController as Projects;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('projects', Projects::class);
