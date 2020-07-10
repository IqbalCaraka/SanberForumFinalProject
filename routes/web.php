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

Route::resource('question','QuestionsController');

Route::resource('tag','TagsController');

Route::resource('category','CategoriesController');

Route::resource('answer', 'AnswersController');

Route::resource('commentque','CommentQuesController');


Route::post('storeupvote', 'QuestionVotesController@storeUpVote')->name('upvote');
Route::post('storedownvote', 'QuestionVotesController@storeDownvote')->name('downvote');