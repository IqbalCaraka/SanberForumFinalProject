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
        $data = DB::select("select sum(value) as value from question_votes where question_id = $id group by question_id");
        //dd($data[0]);
        return $data[0];
    }
}