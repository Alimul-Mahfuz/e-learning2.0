<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentAuthController extends Controller
{
    //
    function studentreg(Request $req)
    {
        $validated = $req->validate(
            [
                'fname' => 'required|regex:/^[a-zA-Z]+$/u|max:15',
                'lname' => 'required|regex:/^[a-zA-Z]+$/u|max:15',
                'email' => 'required|email:rfc,dns|unique:accounts',
                'phone' => 'required|regex:/^\+[8]{2}[0-9]{11}+$/i',
                'pass' => 'required',
                'confpass' => 'required|same:pass',
                'address' => 'required|max:255',
                'city' => 'required',
                'division' => 'required',
                'zip' => 'required'
            ],
            [
                'fname.required' => 'First name cannot be empty',
                'lname.required' => 'Last name cannot be empty',
                'pass.required' => 'Password cannot be empty',
                'confpass.required' => 'Re-type your password',
                'confpass.same' => 'Password should match'


            ]
        );
        $address = $req->address . $req->city . $req->division . $req->zip;
        $account = new Account;
        $account->email = $req->email;
        $account->password = $req->pass;
        $account->save();
        //retriving the account_id from account table and save as foreign key 
        $actid = Account::where('email', $req->email)->first();
        $student = new Student;
        $student->student_name = $req->fname . ' ' . $req->lname;
        $student->email = $req->email;
        $student->account()->email = $req->email;
        $student->account()->password = $req->pass;
        $student->address = $address;
        $student->account_id = $actid->account_id;
        // $account->student()->save($student);

        $stdinfo = Student::where('email', $req->email)->first();

        //Redirecting the user to the student dashboard
        $req->session()->put('username', $stdinfo->student_name);
        $req->session()->put('email', $stdinfo->email);
        return redirect()->route('stddash');
    }

    function StdviewProfile()
    {
        $stdinfo = Student::where('email', session('email'))->first();
        return view('student.stdprofile')->with('data', $stdinfo);
        // return 'hello profile';

    }

    function changepassword(Request $req)
    {
        $acc = Account::where('email', session('email'))->first();
        $validator = Validator::make($req->all(), [
            'oldpass' => 'required',
            'newpass' => 'required',
            'cnfpass' => 'required|same:newpass',

        ],
        [
            'oldpass.required'=>'Old password is required',
            'newpass.required'=>'New password is required',
            'cnfpass.required'=>'Confirm new password is required',
            'cnfpass.same'=>'Confirm password need to be matched with new password',

        ]
    
    
    
    
    );
        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'message' => $validator->errors(),
            ]);
        } 
        else {
            if ($req->oldpass == $acc->password) {
                $acc->password = $req->cnfpass;
                $acc->save();
                return response()->json([
                    'status' => 200,
                    'msg' => 'Password updated successfully',

                ]);
            } else {
                return response()->json([
                    'status'=>400,
                    'msg'=>'Current password is incorrect',
                ]);
            }
        }
    }
}
