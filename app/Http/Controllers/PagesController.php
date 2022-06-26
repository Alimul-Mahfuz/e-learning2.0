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

}
