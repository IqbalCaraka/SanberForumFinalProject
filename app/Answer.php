<?php

namespace App;
use App\User;
use App\CommentAn;
use App\Question;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $guarded =[];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function commentans(){
        return $this->hasMany(CommentAn::class);
    }
    
    public function question(){
        return $this->belongsTo(Question::class);
    }

    
}
