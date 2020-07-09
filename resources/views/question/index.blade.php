@extends('layouts.master')

@section('content')

<h1 class="text-center m-5" style="color: white">Sanber Forum</h1>
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card card-default">
            <div class="card-header">
                <h3 class="float-left">List Of Question</h3>
                <a href="{{route('question.create')}}"  class="btn btn-success btn-lg float-right btn-sm" role="button" aria-disabled="true">Buat Pertanyaan</a>
            </div>

            <div class="card-body">
                @foreach($questoins as $question)
                <ul class="list-group">              
                    
                    <li class="list-group-item">
                        <a href="{{route('question.show', $question->id)}}">{{$question->judul}} </a>
                                              
                        <a href=""  class="btn btn-danger btn-lg float-right btn-sm" role="button" aria-disabled="true">Delete</a>
                        <a href="{{route('question.edit', $question->id)}}" class="button btn btn-primary btn-sm float-right mr-2">Edit</a>  
                    </li>
                    
                </ul>
                @endforeach
            </div>
        </div>
    </div>
</div>



@endsection