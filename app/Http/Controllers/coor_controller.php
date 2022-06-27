<?php

namespace App\Http\Controllers;


use App\Models\Teacher;
use App\Models\Account;
use App\Models\coordinator;
use App\Models\Qualification;
use Illuminate\Http\Request;


class coor_controller extends Controller
{



    function coor_home()
    {
        return view('coordinator.coor_home');
    }

    function fill_register()
    {
        return view('auth.coor_reg');
    }
    //coordinator Registration
    function submit_register(Request $req)
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
                // "degree" => "required|in:Ph.D,MSc,BSc,MBA,BBA",
                "address" => "required|",
                "city" => "required|",
                "division" => "required|in:Dhaka,Khulna,Barisal,Chittagong,Mymensingh,Rajshahi,Sylhet,Rangpur",
                "zip" => "required|",
                "password" => "required|string|min:8",
                "con_password" => "required|same:password",
                "type" => "required"
            ],
        );


        $acc = new Account();
        $acc->email = $req->email;
        $acc->password = $req->password;
        $acc->type = $req->type;
        $acc->save();
        $accid = Account::where('email', $req->email)->first();

        $t = new coordinator();
        $t->coor_name = $req->fname . ' ' . $req->lname;
        $t->email = $req->email;
        $t->phone = $req->phone;
        $t->dob = $req->dob;
        $t->gender = $req->gender;
        // $t->degree = $req->degree;
        $address = $req->address . $req->city . $req->division . $req->zip;
        $t->address = $address;
        $t->account_id = $accid->account_id;
        $t->save();

        return redirect()->route('coor_home');
    }

    // function submit_login(Request $req)
    // {
    //     $this->validate(
    //         $req,
    //         [
    //             "email" => "required",
    //             "password" => "required"
    //         ],
    //     );

        
        // $t = new coordinator();
        // $acc = $t::where('email', $req->email)->where('password', $req->password)->value('email');
        // if (!empty($user)) {
        //     return view('coordinatorHome');
        // } else {
        //     return "wrong password";
        // }
    // }




}
