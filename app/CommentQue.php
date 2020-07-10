<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Question;

class CommentQue extends Model
{
    protected $guarded =[]; 

    /*public function question(){
        return $this->belongsTo(Question::class);
    }*/
    public function user(){
        return $this->belongsTo(User::class);
    }
}
