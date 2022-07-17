<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class coordinator extends Model
{
    use HasFactory;
    protected $table='coordinators';
    protected $primaryKey='coor_id';

    function account(){
        return $this->belongsTo(Account::class,'account_id','coor_id');
    }
}
