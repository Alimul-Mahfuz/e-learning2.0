<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
<<<<<<< HEAD
use App\Http\Controllers\teacherController;
=======
use App\Http\Controllers\StudentAuthController;
>>>>>>> 4c4d19a601ab6f43a00c27d9465fb7ba81c39ba3

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
<<<<<<< HEAD
Route::get('/teacher/register',[teacherController::class,'teacherRegistration'])->name('teacherRegistration');
Route::post('/teacher/register',[teacherController::class,'createSubmit'])->name('CreateSubmit');
Route::get('/teacher/home',[teacherController::class,'teacherHome'])->name('teacherHome');
=======
Route::post('/student/register',[StudentAuthController::class,'studentreg'])->name('stdreg');
Route::get('/student/dashboard',[PagesController::class,'studentdash'])->name('stddash');
>>>>>>> 4c4d19a601ab6f43a00c27d9465fb7ba81c39ba3


