<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tag;
use App\User;

class Question extends Model
{
    protected $guarded =[];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}
