<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\teacherController;
use App\Http\Controllers\AuthController;
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
Route::post('/login',[AuthController::class,'login'])->name('login');
Route::get('/student/register',[PagesController::class,'stdreg'])->name('stdreg');
Route::get('/student/register',[PagesController::class,'stdreg'])->name('stdreg');
Route::post('/student/register',[StudentAuthController::class,'studentreg'])->name('stdreg');
Route::get('/student/dashboard',[PagesController::class,'studentdash'])->name('stddash');
Route::get('/student/logout',[PagesController::class,'studentlogout'])->name('stdlogout');
Route::get('/student/profile',[StudentAuthController::class,'StdviewProfile'])->name('stdprofile');
Route::post('/student/passwordchange',[StudentAuthController::class,'changepassword'])->name('changepass');



Route::get('/teacher/register',[teacherController::class,'teacherRegistration'])->name('teacherRegistration');
Route::post('/teacher/register',[teacherController::class,'createSubmit'])->name('CreateSubmit');
Route::get('/teacher/home',[teacherController::class,'teacherHome'])->name('teacherHome');


