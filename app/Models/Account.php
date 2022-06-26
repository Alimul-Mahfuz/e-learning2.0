<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $table='accounts';
    protected $primaryKey='account_id';
    public $timestamps=false;
=======
    protected $table = 'accounts';
    protected $primaryKey = 'account_id';
    public $timestamps = false;

<<<<<<< HEAD
>>>>>>> 4c4d19a601ab6f43a00c27d9465fb7ba81c39ba3
=======
    // function student(){
    //     return $this->hasOne(Student::class,account_id,student_id);
    // }

>>>>>>> origin/student-cookies-session
}
