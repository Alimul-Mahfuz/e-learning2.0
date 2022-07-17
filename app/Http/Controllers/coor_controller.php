<?php

namespace App\Http\Controllers;


use App\Models\Teacher;
use App\Models\Account;
use App\Models\coordinator;
use App\Models\course;
use App\Models\Student;
use App\Models\Qualification;
use Illuminate\Http\Request;


class coor_controller extends Controller
{



    function coor_home()
    {
        $teacher = Teacher::all();
        $student = Student::all();
        $course = Course::all();
        $account = Account::all();
        $teacherCount = $teacher->count();
        $studentCount = $student->count();
        $courseCount = $course->count();
        $accountCount = $account->count();
        return view('coordinator.coor_home')
                ->with("teacherCount", $teacherCount)
                ->with("studentCount", $studentCount)
                ->with("courseCount", $courseCount)
                ->with("accountCount", $accountCount);
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
                "pro_pic" =>"required|image|mimes:jpeg,png,jpg,gif,svg",
                "type" => "required"
            ],
        );


        $name =  $req->file('pro_pic')->getClientOriginalName();
        $ext = $req->file('pro_pic')->getClientOriginalExtension();
        $path = "profile_images/coordinator/";
        $file_name  = time()."_$name";
        $req->file('pro_pic')->storeAs('public/'.$path,$file_name);


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
        $t->profile_image = 'storage/'.$path.$file_name;
        $t->save();

        return redirect()->route('login');
    }


    // Coordinator profile
    function coor_profile(Request $req)
    {
        // $coordinator = coordinator::where("email", session("email") )->first();
        $coor_obj1 = coordinator::where("email", session("coordinatorEmail") )->first();
        $coor_obj2 = Account::where("email", session("coordinatorEmail") )->first();
        return view("coordinator.coor_profile")
                ->with("coordinator", $coor_obj1)
                ->with("account", $coor_obj2);
    }


    function update_profile(Request $req)
    {

    }


    function newcourse()
    {
        return view("coordinator.coor_new_course");
    }

    function newcourse_submit(Request $req)
    {
        $this->validate(
            $req,
            [
                "coursename" => "required ",
                "courseprice" => "required | regex:/^[0-9]+$/i",
                "catagory" => "required ",
                "capacity" => "required ",
                "duration" => "required ",
                 "course_pro_pic" =>"required|image|mimes:jpeg,png,jpg,gif,svg",
            ],
        );

        $name =  $req->file('course_pro_pic')->getClientOriginalName();
        $ext = $req->file('course_pro_pic')->getClientOriginalExtension();
        $path = "profile_images/courses/";
        $file_name  = time()."_$name";
        $req->file('course_pro_pic')->storeAs('public/'.$path,$file_name);

        $course = new course();

        $course->course_name = $req->coursename;
        $course->price = $req->courseprice;
        $course->catagory = $req->catagory;
        $course->student_count = $req->capacity;
        $course->duration = $req->duration;

        $course->profile_image = 'storage/'.$path.$file_name;

        $course->save();

        return redirect()->route('activecourse');
    }


    function activecourse()
    {
       /* $course = course::all();
        return view('coordinator.coor_act_course')
                    ->with('course', $course);*/

        $course = course::paginate(3);
        return view("coordinator.coor_act_course")
                    ->with("course", $course);
    }


    function teacher()
    {
        $teacher = teacher::all();
        return view('coordinator.coor_teach')
                    ->with('teacher', $teacher);
    }

    function student()
    {
        $student = student::all();
        return view('coordinator.coor_std')
                    ->with('student', $student);
    }


    function coordinatorChangepassword()
    {
        return view('coordinator.coor_cngpass');
    }

    public function coordinatorUpdatepassword(Request $request)
    {
        $request->validate([
            'cpass' => 'required',
            'npass' => 'required|min:8',
            'conpass' => 'required|min:8|same:npass',
        ],
        [
            'cpass' => "Incorrect curent password"
        ]    
    );

        $user = Account::where("email", session("coordinatorEmail") )->first();

        if ($request->cpass === $user->password) {
            $user->password = $request->conpass;
            $user->save();

            return redirect()->route('coor_profile')->with('Success', 'Password Changed Successfully');
        } else {
            return redirect()->back()->with('error', 'Current Password Not Matched!');
        }
    }


    function courseRemove($course_id)
    {
        $course = course::find($course_id)->delete();
        return redirect()->route("activecourse");

    }


    function teacherRemove($teacher_id)
    {
        $teacher = Teacher::find($teacher_id)->delete();
        return redirect()->route("teacher");

    }


    function studentRemove($student_id)
    {
        $student = Student::find($student_id)->delete();
        return redirect()->route("student");

    }
        


    function logout()
    {
        // session()->forget('coordinatorEmail','coodinatorName');
        session()->flush();
        return redirect()->route('login');
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
