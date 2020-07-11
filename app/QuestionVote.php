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

    public static function getNumberOfVotesByQuestionId($id){
        $data = DB::select("select sum(value) as value from question_votes where question_id = $id group by question_id");

        //dd($data[0]);
        //return $data[0];
        //dd($data);
        return $data;
    }

    public static function checkIsUserVoteByAuthIdAndQuestionId($auth_id, $qustion_id){
        $data = DB::select("select* from question_votes where question_id = $qustion_id and user_id=$auth_id");
        //dd($data);
        return $data;

    }
}