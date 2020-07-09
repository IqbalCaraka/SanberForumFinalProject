@extends('layouts.master')

@section('content')

<div class="row justify-content-end mt-5">
    <div class="col-md-10">
        <form action="{{route('question.update', $question->id)}}" method="POST">
            {{@csrf_field()}}
            @method('PUT')

            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" name="judul" id="judul" title="Masukan Judul" value="{{$question->judul}}">                
            </div>

            <div class="form-group">
                <label for="isi">Isi</label>
                <textarea class="form-control" name="isi" id="isi" cols="5" rows="10" title='Masukan Pertanyaanmu'>{{$question->isi}}</textarea>                
            </div>

            <div class="form-group">
                <button type="submit"class="btn btn-success my-4 justify-right">
                    Update
                </button>
            </div>

        </form>
    </div>
</div>





@endsection