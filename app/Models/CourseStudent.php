<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use mysql_xdevapi\Table;

class CourseStudent extends Model
{
    use HasFactory;
    protected $table='coursestudents';
    protected $primaryKey='cs_id';
    public $timestamps=false;

    function student(){
        return $this->belongsTo(Student::class,'s_id','cs_id');
    }
    function course(){
        return $this->belongsTo(Course::class,'c_id','cs_id');
    }
}
