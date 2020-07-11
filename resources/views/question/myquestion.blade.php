@extends('layouts.master3')

@section('content')
<div class="posts__head">
                    <div class="posts__topic">Pertanyaan</div>
                    <div class="posts__category">Category</div>
                    <div style="margin-left: 40px; margin-right: 70px;">Action</div>
                    <div class="posts__replies">Jawaban</div>
                    <div class="posts__replies">Komentar</div>
                    <div class="posts__views">Vote</div>
                </div>
<a href="{{route('question.create')}}"  class="btn btn-success btn-lg float-right btn-sm" role="button" aria-disabled="true">Buat Pertanyaan</a>
<hr>
@foreach($myquestion as $question)
<div class="posts__item bg-f2f4f6">
                        <div class="posts__section-left">
                            <div class="posts__topic">
                                <div class="posts__content">
                                    <a href="{{route('question.show', $question->id)}}">
                                        <h3>{{$question->judul}}</h3>
                                    </a>
                                    <div class="posts__tags tags">
                                        @foreach($question->tags as $tag)
                                            <a class="badge badge-pill badge-secondary bg-gradient-primary" href="">{{$tag->nama}}</a>
                                        @endforeach
                                    </div>
                                    <p>{{date('l, d-m-Y', strtotime($question->created_at))}} || {{date('l, d-m-Y', strtotime($question->updated_at))}}</p>
                                </div>
                            </div>
                            <div class="posts__category"><a href="#" class="category"><i class="bg-4436f8"></i>{{$question->category['nama']}}</a></div>
                        </div>
                        <div class="posts__section-right">
                            <div class="posts__users">
                                <a href="{{route('question.edit', $question->id)}}" class="button btn btn-primary btn-sm">Edit</a> 
                                <form action="{{route('question.destroy', $question->id)}}" style="display: inline" method="POST">
                                    {{@csrf_field()}}
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger"> Delete </button>
                                </form>
                            </div>
                                <div class="posts__replies">{{$question->answers()->count()}}
                            </div>
                                <div class="posts__replies">{{$question->commentques()->count()}}
                            </div>
                            <div class="posts__views">
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
                        </div>
                    </div>
<hr>
 @endforeach

@endsection
