<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\QuestionVote;

class QuestionVotesController extends Controller
{
    public function storeUpVote(Request $request){  
        $data = $request->all();
        //dd($data);
        unset($data['_token']);
        QuestionVote::saveUpVote($data);
        return redirect(route('question.show', $request->question_id));
    }

    public function storeDownVote(Request $request){  
        $data = $request->all();
        unset($data['_token']);
        QuestionVote::saveDownVote($data);
        return redirect(route('question.show', $request->question_id));
    }
}
