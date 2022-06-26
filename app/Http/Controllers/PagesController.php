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
>>>>>>> 4c4d19a601ab6f43a00c27d9465fb7ba81c39ba3
}
