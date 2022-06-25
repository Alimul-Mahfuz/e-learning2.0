<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    function login(){
        return view('auth.login');
    }
    function stdreg(){
        return view('auth.student_reg');
    }

    function studentdash(){
        return view ('student.stddash');
    }
}
