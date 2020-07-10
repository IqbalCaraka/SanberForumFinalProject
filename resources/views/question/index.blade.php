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
                <ul class="list-group">              
                    
                    <li class="list-group-item">

                        <div class="row">
                            <div class="col-md-1 " >
                                <div class="row my-4 justify-content-center" >
                                    <p style="font-size: 10px;">Jumlah Vote</p>                                  
                                </div>
                                
                                <div class="row my-4 justify-content-center">
                                    <p  style="font-size: 10px;">Jumlah Jawaban</p>
                                </div>
                            </div>

                            <div class="col-md-9 justify-content-center mt-5 ">
                                <div class="row ml-1" >
                                    <h5 style="display: inline; "><a href="{{route('question.show', $question->id)}}" class="text-dark">{{$question->judul}} </a></h5>              
                                </div>
                                <div class="row ml-1 mt-5">
                                    @foreach($question->tags as $tag)
                                        <a class="badge badge-pill badge-secondary bg-gradient-primary mx-1" href="">{{$tag->nama}}</a>
                                    @endforeach

                                </div>
                            </div>
                            
                            <div class="col-md-2 justify-content-center mt-5">
                                <form action="{{route('question.destroy', $question->id)}}" style="display: inline" method="POST">
                                    {{@csrf_field()}}
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger float-right"> Delete </button>
                                </form>
                                <a href="{{route('question.edit', $question->id)}}" class="button btn btn-primary btn-sm float-right mr-2">Edit</a> 
                            </div>
                            
                            
                            
                        </div>

                    </li>
                    
                </ul>
                @endforeach
            </div>
        </div>
    </div>
</div>



@endsection