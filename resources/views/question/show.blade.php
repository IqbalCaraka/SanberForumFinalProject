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
                        <div class="row">
                            <div class="col-md-1">
                                <div class="row my-4">
                                    <a href="" class="d-block text-dark text-decoration-none">
                                        <svg width="4em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-up-fill d-print-flex" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.247 4.86l-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z"/>
                                        </svg>
                                    </a> 
                                </div>
                                
                                <div class="row my-4">
                                    <a href="" class="d-block text-dark text-decoration-none">
                                        <svg width="4em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-down-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-11 justify-content-center my-auto" style="border-left: 1px solid grey;">
                                {!!$question->isi!!}
                            </div>
                        </div>                   
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