<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\Account;
use App\Models\Qualification;
use Illuminate\Http\Request;

class teacherController extends Controller
{
    function teacherHome()
    {
        return view('Teacher.Teacher_Home');
    }

    function teacherRegistration()
    {
        return view('auth.teacher_reg');
    }
    //Teacher Registration
    function createSubmit(Request $req)
    {

        $this->validate(
            $req,
            [
                "fname" => "required|max:20|regex:/^[a-z ,.'-]+$/i",
                "lname" => "required|max:20|regex:/^[a-z ,.'-]+$/i",
                "email" => 'required|email|unique:accounts',
                "phone" => 'required|regex:/^\+[8]{2}[0-9]{11}+$/i',
                "dob" => "required|date|before:-18 years",
                "gender" => "Required",
                "degree" => "required|in:Ph.D,MSc,BSc,MBA,BBA",
                "address" => "required|",
                "city" => "required|",
                "division" => "required|in:Dhaka,Khulna,Barisal,Chittagong,Mymensingh,Rajshahi,Sylhet,Rangpur",
                "zip" => "required|",
                "password" => "required|string|min:8|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/",
                "con_password" => "required|same:password"
            ],
        );


        $acc = new Account();
        $acc->email = $req->email;
        $acc->password = $req->password;
        $acc->save();
        $accid = Account::where('email', $req->email)->first();

        $t = new Teacher();
        $t->teacher_name = $req->fname . ' ' . $req->lname;
        $t->email = $req->email;
        $t->phone = $req->phone;
        $t->dob = $req->dob;
        $t->gender = $req->gender;
        $t->degree = $req->degree;
        $address = $req->address . $req->city . $req->division . $req->zip;
        $t->address = $address;
        $t->account_id = $accid->account_id;
        $t->save();

        return redirect()->route('teacherHome');
    }

}
