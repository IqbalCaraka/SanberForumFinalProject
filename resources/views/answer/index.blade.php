@extends('layouts.master')

@section('content')

<h1 class="text-center m-5" style="color: white">Sanber Forum</h1>
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card card-default">
            <div class="card-header">
                <h3 class="float-left">List Jawaban</h3>
                <a href="{{route('answer.create')}}"  class="btn btn-success btn-lg float-right btn-sm" role="button" aria-disabled="true">Tambah Jawabanmu</a>
            </div>

            <div class="card-body">
                @foreach($answers as $answer)
                <ul class="list-group" style="padding: 5px">              
                    
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

                            <div class="col-md-9 justify-content-center my-auto "style="position: relative;">
                                <div class="row ml-1 my-5" >
                                    <h5 style="display: inline; position: absolute;"><a href="{{route('answer.show', $answer->question_id)}}" class="text-dark">{!!$answer->isi!!}</a></h5>              
                                </div>
                            </div>
                            
                            <div class="col-md-2 justify-content-center my-auto">
                                <form action="{{route('answer.destroy', $answer->id)}}" style="display: inline" method="POST">
                                    {{@csrf_field()}}
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger float-right"> Delete </button>
                                </form>
                                <a href="{{route('answer.edit', $answer->id)}}" class="button btn btn-primary btn-sm float-right mr-2">Edit</a> 
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