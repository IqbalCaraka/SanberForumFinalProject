@extends('layouts.master')

@push('script-head')
    <!-- Go to www.addthis.com/dashboard to customize your tools --> 
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5f073cb55230ac3b"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
@endpush

@section('content')

<h1 class="text-center m-5" style="color: white">Sanber Forum</h1>
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card card-default">
            <div class="card-header">
                <h3>{{$question->judul}}</h3>
                <h6 style="font-style: italic;">Ditanyakan oleh {{$question->user->name}}</h6>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-1">
                        @if( is_array ($auth->checkIsVoted($auth->id, $question->id)))
                            <!--KETIKA TELAH SELESAI VOTE-->
                            @if(count((array)$auth->checkIsVoted($auth->id, $question->id)) != 0)
                            <div class="row my-1 justify-content-center ml-1">
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
                            <div class="row my-1 justify-content-center  ml-1">
                                <p style="font-size: 15px;">Vote</p>
                            </div> 
                            @else
                            <!--KETIKA BELUM PERNAH VOTE-->
                            <div class="row my-5 ml-1">
                                <form action="{{route('upvote')}}" method="POST">
                                    {{@csrf_field()}}
                                    <input type="hidden" name="question_id" id="question_id" value="{{$question->id}}">
                                    <input type="hidden" name="question_user_id" id="question_user_id" value="{{$question->user_id}}">
                                    <input type="hidden" name="user_id" id="user_id" value="{{ Auth::user()->id }}">
                                    <button type="submit"  class="btn btn-info btn-sm">
                                        <span class="glyphicon glyphicon-upload"></span>UpVote
                                    </button>
                                </form>
                            </div>

                            <div class="row my-5 justify-content-center ml-1">
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
                            <!--Apabila poin lebih dari 15 boleh downvote-->
                            @if($auth->getReputation($auth->id)->point >14)
                            <div class="row my-5 ml-1">
                                <form action="{{route('downvote')}}" method="POST">
                                    {{@csrf_field()}}
                                    <input type="hidden" name="question_id" id="question_id" value="{{$question->id}}">
                                    <input type="hidden" name="question_user_id" id="question_user_id" value="{{$question->user_id}}">
                                    <input type="hidden" name="user_id" id="user_id" value="{{ Auth::user()->id }}">
                                    <button type="submit"  class="btn btn-info btn-sm">
                                        <span class="glyphicon glyphicon-download"></span>UnVote
                                    </button>
                                </form>
                            </div>
                            @endif
                            @endif
                        @endif                        
                    </div>
                    <div class="col-md-10 justify-content-center my-auto ml-3" style="border-left: 1px solid grey;">
                        {!!$question->isi!!}
                        @foreach($question->tags as $tag)
                            <a class="badge badge-pill badge-secondary bg-gradient-primary" href="">{{$tag->nama}}</a>
                        @endforeach
                        <div class="addthis_inline_share_toolbox mt-3"></div>
                    </div>
                </div>
                
            </div>

            <div class="card-footer" style="background-color: white;">
                @if($question->commentques()->count())
                <h5 class="mb-2">Komentar : </h5>
                    @foreach ($question->commentques as $commentque )
                    <div class="row ml-4 my-3">
                        <div class="col-md-2">
                            <p style="font-weight: 500;">{{$commentque->user->name}}</p>
                        </div>
                        <div class="col-md-10" style="border-bottom: 0.5px solid grey;">
                            <p style="font-style: italic;">{{$commentque->isi}} 
                            
                                <div style="font-size: 10px;" class="justify-content-end float-right d-inline">
                                    {{$commentque->created_at}}
                                </div>
                            </p>
                            
                        </div>
                    </div>
                    @endforeach
                @endif
                <form action="{{route('commentque.store')}}" method="POST">
                {{@csrf_field()}}
                    <div class="form-group">
                        <input type="text" class="form-control d-inline" style="width: 90%;" name="isi" id="isi" title="Tambah Komentar" placeholder="Tambah Komnentar">
                        <input type="hidden" class="form-control d-inline" style="width: 0%;" name="id" id="id" value="{{$question->id}}" >
                        <button type="submit"class="btn btn-success btn-sm float-right mt-1">Submit</button>
                    </div>
                </form>
                
            </div>

            <div class="card-footer">
                <a href="{{route('question.index')}}"  class="btn btn-danger btn-lg float-right btn-sm" role="button" aria-disabled="true">Kembali</a>
                <a href="{{route('answer.create')}}" class="button btn btn-primary btn-sm float-right mr-3" style="display:inline;">Tambahkan Jawaban</a>
            </div>

        </div>
    </div>
</div>


@endsection


@push('css')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
@endpush