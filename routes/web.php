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
Route::get('/about_me' , [AboutmeController::class, 'index'])->name('about_me');

Route::get('/hobbies' , [HobbyController::class, 'index'])->name('hobbies');

Route::get('/skills' , [SkillsController::class, 'index'])->name('skills');


