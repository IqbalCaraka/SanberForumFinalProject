<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Category;
use App\User;
use App\Tag;


class Question extends Model
{
    protected $guarded =[];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    public function hasTag($tagid)
    {
       return (in_array($tagid, $this->tags->pluck('id')->toArray()));
    }
}
