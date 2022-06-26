<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Account;
use App\Models\Teacher;

class AuthController extends Controller
{
    //
    function login(Request $req){
        $validated=$req->validate(
            [
                'email' => 'required|email:rfc,dns',
                'pass'=>'required',
            ],
            );
        $acct=Account::where('email',$req->email)->where('password',$req->pass)->first();
        //checking if the $acct array is empty or not if empty the input email and password not exists in the database
        if($acct->type==3){
            if(!empty($acct)){
                $stdinfo=Student::where('account_id',$acct->account_id)->first();
                $req->session()->put('username', $stdinfo->student_name);
                $req->session()->put('email', $stdinfo->email);
                return redirect()->route('stddash');
            }
            else{
                return \back()->with('Faild','Login Faild email or password error');
            }
        }
        // For teacher login
        if($acct->type==2){
            if(!empty($acct)){
                $teacherinfo=Teacher::where('account_id',$acct->account_id)->first();
                $req->session()->put('username', $teacherinfo->teacher_name);
                $req->session()->put('email', $teacherinfo->email);
                return redirect()->route('teacherHome');
            }
            else{
                return \back()->with('Faild','Login Faild email or password error');
            }
        }

        
    }
}
