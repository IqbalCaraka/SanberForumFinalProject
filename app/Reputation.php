<?php

namespace App;
use Illuminate\Support\Facades\DB;

class Reputation{
    public static function createReputation($id){
        DB::table('reputations')->insert([
            'point'=>50,
            'user_id' => $id
        ]);
    }

    public static function addPointUpVote($id){
        $data = DB::table('reputations')->where('user_id', '=', $id)->first();
        $data->point = $data->point +10;

        DB::table('reputations')->
            where('user_id', '=', $id)->
            update(['point' => $data->point] );
    }

    public static function addPointBestAnswer($id){
        $data = DB::table('reputations')->where('user_id', '=', $id)->first();
        $data->point = $data->point +35;

        DB::table('reputations')->
            where('user_id', '=', $id)->
            update(['point' => $data->point] );
    }

    public static function substractPointDownVote($id){
        $data = DB::table('reputations')->where('user_id', '=', $id)->first();
        $data->point = $data->point -1;

        DB::table('reputations')->
            where('user_id', '=', $id)->
            update(['point' => $data->point] );
    }
}