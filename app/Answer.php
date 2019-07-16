<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = ['correct'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
