<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Question;

class Category extends Model
{
    protected $guarded =[];

    public function questions(){
        return $this->hasMany(Question::class);
    }

    //Untuk menghapus relasi table terkait
    public function delete()
    {
        $this->questions()->delete();
        return parent::delete();
    }
}
