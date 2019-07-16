<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    protected $fillable = ['loop_points','user_id','correct_answers'];


}
