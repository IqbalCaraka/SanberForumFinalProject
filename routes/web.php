<?php

use App\Http\Controllers\QuestionsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::group(['middleware' => ['auth']], function(){
    Route::resource('question','QuestionsController');
    Route::get('myquestion/{userid}', 'QuestionsController@myquestionindex')->name('myquestion.index');
	Route::resource('tag','TagsController');
	Route::resource('category','CategoriesController');
    Route::resource('answer', 'AnswersController');
    Route::get('answercreate/{question_id}', 'AnswersController@createans')->name('answercreate');
	Route::resource('commentque','CommentQuesController');
    Route::resource('commentan','CommentAnsController');
    Route::post('storeupvote', 'QuestionVotesController@storeUpVote')->name('upvote');
    Route::post('storedownvote', 'QuestionVotesController@storeDownvote')->name('downvote');
    Route::post('bestanswer', 'QuestionVotesController@storeBestAnswer')->name('bestanswer');
});
