<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use App\Category;
use App\CommentQue;
use App\User;
use App\Tag;
use App\Answer;
use App\QuestionVote;


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

    public function answers(){
        return $this->hasMany(Answer::class);
    }

    public function votes($id){
        //dd(QuestionVote:: joinQuestion($id));
        return QuestionVote:: getNumberOfVotesByQuestionId($id);
    }

    public function hasTag($tagid)
    {
       return (in_array($tagid, $this->tags->pluck('id')->toArray()));
    }

    //Untuk menghapus relasi table terkait
    public function delete()
    {
        $this->commentques()->delete();
        $this->answers()->delete();
        //detach digunakan utk menghapus pivot table
        $this->tags()->detach();
        return parent::delete();
    }
}
