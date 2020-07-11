<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use App\Reputation;
use App\QuestionVote;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getReputation($id){
        //dd(Reputation::getReputationByUserId($id));
        return Reputation::getReputationByUserId($id);
    }

    public function checkIsVoted($user_id, $question_id){
        
        return QuestionVote::checkIsUserVoteByAuthIdAndQuestionId($user_id, $question_id);
    }

}
