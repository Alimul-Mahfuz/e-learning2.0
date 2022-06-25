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

    function teacherRegistration(){
        return view('auth.teacher_reg');
    }

    function createSubmit(Request $req){

        $this->validate($req,
             [
                "fname"=>"required|max:20|regex:/^[a-z ,.'-]+$/i",
                "lname"=>"required|max:20|regex:/^[a-z ,.'-]+$/i",
                "email"=>"required|email",
                "phone"=>'required|regex:/^\+[8]{2}[0-9]{11}+$/i',
                "dob"=>"required|date|before:-18 years",
                "gender"=>"Required|in:Male,Female",
                "degree"=>"required|in:Ph.D,MSc,BSc,MBA,BBA",
                "address"=>"required|",
                "city"=>"required|",
                "division"=>"required|in:Dhaka,Khulna,Barisal,Chittagong,Mymensingh,Rajshahi,Sylhet,Rangpur",
                "zip"=>"required|",
                "password"=>"required|string|min:8|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/",
                "con_password"=>"required|same:password"
             ],
            );

            return $req->all();

        return "Submitted with valid value";
    }
}
