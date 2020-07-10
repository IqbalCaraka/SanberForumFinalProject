<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reputation;

class ReputationsController extends Controller
{
    public static function store ($id){
        Reputation::createReputation($id);
    }

    public static function updateUpVote($id){
        Reputation::addPointUpVote($id);
    }

    public static function updateDownVote($id){
        Reputation::substractPointDownVote($id);
    }

    public static function updateBestAnswer($id){
        Reputation::addPointBestAnswer($id);
    }
}
