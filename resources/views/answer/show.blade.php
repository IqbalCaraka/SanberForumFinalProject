@extends('layouts.master')

@section('content')
<h1 class="text-center m-5" style="color: white">Sanber Forum</h1>
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card card-default">
            <div class="card-body">
                <ul class="list-group">                                 
                    @foreach ($answers as $answer)
                        @if ($answer->question_id == $question_id)
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
                                        {!!$answer->isi!!}
                                        <div class="addthis_inline_share_toolbox mt-3"></div>
                                    </div>
                                </div>                   
                            </li>
                        @endif     
                    @endforeach

                </ul>
            </div>

            <div class="card-footer" style="background-color: white;">
                @if($answer->commentans()->count())
                <h5 class="mb-2">Komentar : </h5>
                    @foreach ($answer->commentans as $commentan )
                    <div class="row ml-4 my-3">
                        <div class="col-md-2">
                            <p style="font-weight: 500;">{{$commentan->user->name}}</p>
                        </div>
                        <div class="col-md-10" style="border-bottom: 0.5px solid grey;">
                            <p style="font-style: italic;">{{$commentan->isi}} 
                            
                                <div style="font-size: 10px;" class="justify-content-end float-right d-inline">
                                    {{$commentan->created_at}}
                                </div>
                            </p>
                            
                        </div>
                    </div>
                    @endforeach
                @endif
                <form action="{{route('commentan.store')}}" method="POST">
                {{@csrf_field()}}
                    <div class="form-group">
                        <input type="text" class="form-control d-inline" style="width: 90%;" name="isi" id="isi" title="Tambah Komentar" placeholder="Tambah Komnentar">
                        <input type="hidden" class="form-control d-inline" style="width: 0%;" name="id" id="id" value="{{$answer->id}}" >
                        <button type="submit"class="btn btn-success btn-sm float-right mt-1">Submit</button>
                    </div>
                </form>
                
            </div>

            <div class="card-footer">
                <a href="{{route('question.index')}}"  class="btn btn-danger btn-lg float-right btn-sm" role="button" aria-disabled="true">Kembali</a>
                <a href="{{route('answer.create')}}"  class="btn btn-primary btn-lg float-right btn-sm mr-2" role="button" aria-disabled="true">Tambahkan Jawaban</a>
            </div>
        </div>
    </div>
</div>



@endsection

@push('scripts')
<!-- Go to www.addthis.com/dashboard to customize your tools --> 
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5f073cb55230ac3b"></script>
@endpush