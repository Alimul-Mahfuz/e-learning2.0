<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\Account;
use App\Models\Qualification;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
                "password" => "required|string|min:8",
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

    function logout()
    {
        session()->forget('username');
        session()->forget('email');
        session()->forget('account_id');
        return redirect()->route('login');
    }

    function teacherProfile(Request $req)
    {
        $teacherinfo = Teacher::where('email', session('email'))->first();
        return view('Teacher.Teacher_Profile')->with('data', $teacherinfo);
    }

    function teacherChangepassword()
    {
        return view('Teacher.Change_Password');
    }

    public function teacherUpdatepassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|min:6|max:12|string|confirmed',
            'password_confirmation' => 'required',
        ]);

        $user = Account::find(session('account_id'))->first();

        if ($request->current_password === $user->password) {
            $user->password = $request->password_confirmation;
            $user->save();

            return redirect()->route('teacherProfile')->with('Success', 'Password Changed Successfully');
        } else {
            return redirect()->back()->with('error', 'Current Password Not Matched!');
        }
    }

    function profilePicturesubmit(Request $req)
    {
        $this->validate($req, [
            "profile_image" => "required|image|mimes:jpeg,png,jpg,gif,svg"
        ]);

        $teacherinfo = Teacher::where('email', session('email'))->first();

        $name =  $req->file('profile_image')->getClientOriginalName();
        $name =  'Teacher_id' . $teacherinfo->account_id;
        //dd($teacherinfo);
        $ext = $req->file('profile_image')->getClientOriginalExtension();
        $path = "profile_images/";
        $file_name  = time() . "_$name." . $ext;
        $req->file('profile_image')->storeAs('public/' . $path, $file_name);
        $teacherinfo->profile_image = 'storage/' . $path . $file_name;
        $teacherinfo->save();
        return redirect()->route('teacherProfile')->with('img_path', $teacherinfo->profile_image);
    }
}
