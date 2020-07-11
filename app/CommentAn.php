<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Answer;

class CommentAn extends Model
{
    protected $guarded =[]; 

    /*public function answer(){
        return $this->belongsTo(Answer::class);
    }*/
    public function user(){
        return $this->belongsTo(User::class);
    }
}
