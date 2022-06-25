<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentAuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/login',[PagesController::class,'login'])->name('login');
Route::post('/login',[StudentAuthController::class,'stdlogin'])->name('login');
Route::get('/student/register',[PagesController::class,'stdreg'])->name('stdreg');
Route::post('/student/register',[StudentAuthController::class,'studentreg'])->name('stdreg');
Route::get('/student/dashboard',[PagesController::class,'studentdash'])->name('stddash');


