<?php

namespace App;
use Illuminate\Support\Facades\DB;

class QuestionVote{
    public static function saveUpVote($data){
        DB::table('question_votes')->updateOrInsert([
                'user_id' => $data['user_id'],            
                'question_id' => $data['question_id']],
                ['value' => '1']
        );
    }

    public static function saveDownVote($data){
        DB::table('question_votes')->updateOrInsert([
            'user_id' => $data['user_id'],            
            'question_id' => $data['question_id']],
            ['value' => '-1']
        );
    }

    public static function joinQuestion($id){
       $data =  DB::table('question_votes')
            ->select(DB::raw('sum(value) as value, value'))
            ->where('question_id', '=', $id )
            ->groupBy('question_id')
            ->first();   
        return $data;
    }
}