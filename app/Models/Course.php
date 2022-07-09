<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $table='courses';
    protected $primaryKey='course_id';
    public  $timestamps=false;

    function courseStudent(){
        return $this->hasMany(CourseStudent::class,'c_id');
    }
    function courseTeacher(){
        return $this->hasMany(CourseTeacher::class,'course_id');
    }
}
