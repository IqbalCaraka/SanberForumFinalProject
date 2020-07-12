<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Http\Controllers\AnswersController;
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
    public function storeBestAnswer(Request $request){
        $data = $request->all();
        unset($data['_token']);
        Reputation::addPointBestAnswer($request->answer_user_id);
        AnswersController::storeIsBestAnswer($request->answer_id);
        return redirect(route('question.show' , $request->question_id));

    }
    
}
