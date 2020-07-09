@extends('layouts.master')

@section('content')

<h1 class="text-center m-5" style="color: white">Sanber Forum</h1>
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card card-default">
            <div class="card-header">
                <h5 class="float-left">{{$question->judul}}</h5>
            </div>

            <div class="card-body">
                <ul class="list-group">                                 
                    <li class="list-group-item">
                        {{$question->isi}}                      
                    </li>                   
                </ul>
            </div>

            <div class="card-footer">
                <a href="{{route('question.index')}}"  class="btn btn-danger btn-lg float-right btn-sm" role="button" aria-disabled="true">Kembali</a>
            </div>
        </div>
    </div>
</div>



@endsection