<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class PagesController extends Controller
{
    //
    function login(){
        return view('auth.login');
    }
    function stdreg(){
        return view('auth.student_reg');
    }

<<<<<<< HEAD
=======
    function studentdash(){
        return view ('student.stddash');
    }
    
    function studentlogout(){
        if(session()->has('username')&&session()->has('email')){
            session()->pull('username');
            session()->pull('email');
        }
        return redirect()->route('home');
    }
>>>>>>> origin/student-cookies-session
}
