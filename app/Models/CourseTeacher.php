<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseTeacher extends Model
{
    use HasFactory;
    protected $table='courseteachers';
    protected $primaryKey='ct_id';
    public $timestamps=false;

    function teacher(){
        return $this->belongsTo(Teacher::class,'teacher_id');
    }
    function course(){
        return $this->belongsTo(Course::class,'course_id');
    }
}
