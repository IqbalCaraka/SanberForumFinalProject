@extends('layouts.master')

@section('content')

<h1 class="text-center m-5" style="color: white">Sanber Forum</h1>
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card card-default">
            <div class="card-header">
                <h3 class="float-left">List Pertanyaan</h3>
                <a href="{{route('question.create')}}"  class="btn btn-success btn-lg float-right btn-sm" role="button" aria-disabled="true">Buat Pertanyaan</a>
            </div>

            <div class="card-body">
                @foreach($questions as $question)
                    <div class="row" style="height:150px; position: relative; border-bottom: 1px solid grey;" >

                        <div class="col-md-1" style=" position: relative;" >
                            <div class="row" style="margin: 0;position: absolute; top: 10%;left: 50%; transform: translate(-50%, -20%); -ms-transform: translate(-50%, -50%); height: 30%;">
                                @if(is_array ($question->votes($question->id)))
                                    @if(count((array)$question->votes($question->id)) == 0)
                                        <p style="font-size: 30px;">0</p>
                                    @else
                                        @foreach ($question->votes($question->id) as $votes)
                                            <p style="font-size: 30px;">{{$votes->value}}</p>
                                        @endforeach
                                    @endif
                                @endif  
                            </div>

                            <div class="row" style="margin: 0;position: absolute; top: 30%;left: 50%; transform: translate(-50%, -0%); -ms-transform: translate(-50%, -50%); height: 30%;">
                                <p style="font-size: 10px;">Vote</p>
                            </div>

                            <div class="row" style="margin: 0;position: absolute; bottom: 20%;left: 50%; transform: translate(-50%, -0%); -ms-transform: translate(-50%, -50%); height: 30%;">
                                <p style="font-size: 30px;">{{$question->answers()->count()}}</p>
                            </div>

                            <div class="row" style="margin: 0;position: absolute; bottom: 10%;left: 50%; transform: translate(-50%, 0%); height: 10%;">
                                <p style="font-size: 10px;">Jawaban</p>
                            </div>
                        </div>

                        <div class="col-md-9" style=" position: relative;">
                            <div class="row" style=" position: absolute;  margin: 0; bottom:50%; ">
                                <h5><a href="{{route('question.show', $question->id)}}" class="text-dark">{{$question->judul}} </a></h5>
                                
                            </div>
                            <div class="row" style=" position: absolute;  margin: 0; bottom:25%; transform: translate(0%, 0%); -ms-transform: translate(-100%, -100%); ">
                                @foreach($question->tags as $tag)
                                    <span class="badge badge-pill badge-secondary bg-gradient-primary mx-1" href="">{{$tag->nama}}</span>
                                @endforeach
                            </div>

                            <div class="row" style=" position: absolute;  margin: 0; bottom:0%; transform: translate(0%, 0%); -ms-transform: translate(-100%, -100%); ">
                                <p style="font-style: italic; font-size: small;">Ditanyakan oleh {{$question->user->name}}</p>   
                            </div>
                            
                        </div>
                        
                        <div class="col-md-2" style="position: relative;">
                            <div class="row" style=" position: absolute; margin: 0; bottom:40%; left:20% ">
                                <a href="{{route('question.edit', $question->id)}}" class="button btn btn-primary btn-sm mr-2">Edit</a> 
                                <form action="{{route('question.destroy', $question->id)}}" style="display: inline" method="POST">
                                    {{@csrf_field()}}
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger"> Delete </button>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>



@endsection