<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\teacherController;
use App\Http\Controllers\AuthController;

// Coordinator start

use App\Http\Controllers\coor_controller;

// Coordinator end

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
Route::post('/login',[AuthController::class,'login'])->name('login');
Route::get('/student/register',[PagesController::class,'stdreg'])->name('stdreg');
Route::get('/student/register',[PagesController::class,'stdreg'])->name('stdreg');
Route::post('/student/register',[StudentAuthController::class,'studentreg'])->name('stdreg');
Route::get('/student/dashboard',[PagesController::class,'studentdash'])->name('stddash');
Route::get('/student/logout',[PagesController::class,'studentlogout'])->name('stdlogout');



Route::get('/teacher/register',[teacherController::class,'teacherRegistration'])->name('teacherRegistration');
Route::post('/teacher/register',[teacherController::class,'createSubmit'])->name('CreateSubmit');
Route::get('/teacher/home',[teacherController::class,'teacherHome'])->name('teacherHome');





// Coordinator start

Route::get('/Coordinator/register',[coor_controller::class,'fill_register'])->name('fill_register');
Route::post('/Coordinator/register',[coor_controller::class,'submit_register'])->name('submit_register');
Route::get('/Coordinator/home',[coor_controller::class,'coor_home'])->name('coor_home');
Route::get('/Coordinator/coor_profile',[coor_controller::class,'coor_profile'])->name('coor_profile')->middleware("logincheck");
Route::get('/logout',[coor_controller::class,'logout'])->name('logout');

// Coordinator end







