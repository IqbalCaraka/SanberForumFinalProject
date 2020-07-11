@extends('layouts.master')

@section('content')

<h1 class="text-center m-5" style="color: white">Sanber Forum</h1>
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card card-default">
            <div class="card-header">
                <h5 class="float-left">Categories</h5>
                <a href="{{route('category.create')}}"><input type="submit" class="btn btn-primary" value="Tambah" style="float: right;"></a>
            </div>

            <div class="card-body">
                @foreach($categories as $category)
                    <ul class="list-group">                                 
                        <li class="list-group-item">
                            <div class="col-md-11 justify-content-center my-auto" >
                                {{$category->nama}}
                            </div>          
                        </li>                   
                    </ul>
                @endforeach
            </div>

            <div class="card-footer">
                <a href="{{route('question.index')}}"  class="btn btn-danger btn-lg float-right btn-sm" role="button" aria-disabled="true">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection