<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutmeController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\HobbieseController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about_me', function () {
    return view('about_me');
});

Route::get('/skills', function () {
    return view('skills');
});

Route::get('/hobbies', function () {
    return view('hobbies');
});

