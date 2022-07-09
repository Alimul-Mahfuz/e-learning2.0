<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class PrintCourseController extends Controller
{
    //
    function  printAvailableCourse(){
        $info=Course::paginate(6);
//        return $info;
        return view('student.viewallcrs')->with('info',$info);
    }


}
