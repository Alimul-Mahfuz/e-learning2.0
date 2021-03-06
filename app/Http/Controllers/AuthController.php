<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Account;
use App\Models\Teacher;
use App\Models\Coordinator;

class AuthController extends Controller
{
    //
    function login(Request $req)
    {
        $validated = $req->validate(
            [
                'email' => 'required|email:rfc,dns',
                'pass' => 'required',
            ],
        );
        $acct = Account::where('email', $req->email)->where('password', $req->pass)->first();
        //checking if the $acct array is empty or not if empty the input email and password not exists in the database
        if ($acct->type == 3) {
            if (!empty($acct)) {
                $stdinfo = Student::where('account_id', $acct->account_id)->first();
                $req->session()->put('username', $stdinfo->student_name);
                $req->session()->put('email', $stdinfo->email);
                return redirect()->route('stddash');
            } else {
                return \back()->with('Faild', 'Login Faild email or password error');
            }
        }
        // For teacher login
        if ($acct->type == 2) {
            if (!empty($acct)) {
                $teacherinfo = Teacher::where('account_id', $acct->account_id)->first();
        if(!empty($acct)){
            if($acct->type==3){
                $stdinfo=Student::where('account_id',$acct->account_id)->first();
                $req->session()->put('username', $stdinfo->student_name);
                $req->session()->put('email', $stdinfo->email);
                return redirect()->route('stddash');
                
            }
            // For teacher login
            if($acct->type==2){
                $teacherinfo=Teacher::where('account_id',$acct->account_id)->first();
                $req->session()->put('username', $teacherinfo->teacher_name);
                $req->session()->put('email', $teacherinfo->email);
                $req->session()->put('account_id', $acct->account_id);
                return redirect()->route('teacherHome');
            } else {
                return \back()->with('Faild', 'Login Faild email or password error');
            }
        }
    }
            }

            // For Coordinator login
            if($acct->type==4){
                if (!empty($acct)) {
                $coor_info=Coordinator::where('account_id',$acct->account_id)->first();
                $req->session()->put('coordinatorName', $coor_info->coor_name);
                $req->session()->put('coordinatorEmail', $coor_info->email);
                return redirect()->route('coor_home');
            }        
        }
        else{
            return back()->with('Faild','Login Faild email or password error');
        }
        
    }
}
