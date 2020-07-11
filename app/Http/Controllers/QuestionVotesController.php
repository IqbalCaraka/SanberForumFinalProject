<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\QuestionVote;
use App\Reputation;

class QuestionVotesController extends Controller
{
    public function storeUpVote(Request $request){  
        $data = $request->all();
        unset($data['_token']);
        //dd($data);
        Reputation::addPointUpVote($data['question_user_id']);
        QuestionVote::saveUpVote($data);
        return redirect(route('question.show', $request->question_id));
    }

    public function storeDownVote(Request $request){  
        $data = $request->all();
        unset($data['_token']);
        Reputation::substractPointDownVote($data['question_user_id']);
        QuestionVote::saveDownVote($data);
        return redirect(route('question.show', $request->question_id));
    }
    //kurang best answer
}
