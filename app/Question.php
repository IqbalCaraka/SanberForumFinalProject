<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use App\Category;
use App\CommentQue;
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

    public function commentques(){
        return $this->hasMany(CommentQue::class);
    }

    public function hasTag($tagid)
    {
       return (in_array($tagid, $this->tags->pluck('id')->toArray()));
    }

    //Untuk menghapus relasi table terkait
    public function delete()
    {
        $this->commentques()->delete();
        //detach digunakan utk menghapus pivot table
        $this->tags()->detach();
        return parent::delete();
    }
}
