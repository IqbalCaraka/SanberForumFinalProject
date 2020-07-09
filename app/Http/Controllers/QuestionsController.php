<?php

namespace App\Http\Controllers;

use App\Category;
use App\Question;
use App\Tag;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('question.index')->with('questions', Question::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('question.create')->
            with('tags', Tag::all())->
            with('categories', Category::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $question = Question::create([
            'judul' => $request->judul,
            'isi' =>$request->isi,
            'user_id' => auth()->user()->id,
            'category_id' =>$request->category
        ]);
        
        if ($request->tags){
            $question->tags()->attach($request->tags);
        }  
        return redirect(route('question.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('question.show')->with('question', Question::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('question.edit')->
            with('question', Question::find($id))->
            with('categories', Category::all())->
            with('tags', Tag::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        $question->judul = $request->judul;
        $question->isi = $request->isi;
        $question->category_id = $request->category;


        if ($request->tags){
            $question->tags()->sync($request->tags);
        }

        $question->update();
        return redirect(route('question.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        $question->delete();
        return redirect(route('question.index'));
    }
}
