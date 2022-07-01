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

Route::get('/login', [PagesController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/student/register', [PagesController::class, 'stdreg'])->name('stdreg');
Route::get('/teacher/register', [teacherController::class, 'teacherRegistration'])->name('teacherRegistration');
Route::post('/teacher/register', [teacherController::class, 'createSubmit'])->name('CreateSubmit');
Route::get('/teacher/home', [teacherController::class, 'teacherHome'])->name('teacherHome');
Route::get('/logout', [teacherController::class, 'logout'])->name('tlogout');
Route::get('/teacher/Profile', [teacherController::class, 'teacherProfile'])->name('teacherProfile')->middleware('teache.profile');
Route::get('/teacher/changepassword', [teacherController::class, 'teacherChangepassword'])->name('teacherChangepassword')->middleware('teache.profile');
Route::post('/teacher/changepassword', [teacherController::class, 'teacherUpdatepassword'])->name('teacherUpdatepassword')->middleware('teache.profile');
Route::get('/Profile', [teacherController::class, 'profilePicturesubmit'])->name('profilePicturesubmit');
Route::post('/teacher/Profile', [teacherController::class, 'profilePicturesubmit'])->name('profilePicturesubmit');
Route::get('/student/dashboard',[PagesController::class,'studentdash'])->name('stddash');
Route::get('/student/logout',[PagesController::class,'studentlogout'])->name('stdlogout');
Route::get('/student/profile',[StudentAuthController::class,'StdviewProfile'])->name('stdprofile');
Route::post('/student/changepass',[StudentAuthController::class,'changepassword'])->name('chngpass');
Route::get('/student/changepass',[PagesController::class,'changepassword'])->name('chngpass');



Route::get('/teacher/register',[teacherController::class,'teacherRegistration'])->name('teacherRegistration');
Route::post('/teacher/register',[teacherController::class,'createSubmit'])->name('CreateSubmit');
Route::get('/teacher/home',[teacherController::class,'teacherHome'])->name('teacherHome');

// Route::get('/course/details',[teacherController::class,'courseDetails'])->name('courseDetails');
Route::get('/course/details',[teacherController::class,'studentList'])->name('studentList');


