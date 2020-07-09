@extends('layouts.master')


@section('content')

<div class="container ">
<div class="row justify-content-center mt-5">
    <div class="col-md-10">
        <form action="{{route('category.store')}}" method="POST">
            {{@csrf_field()}}
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama" title="Masukan Nama Kategori">                
            </div>

            <div class="form-group">
                <button type="submit"class="btn btn-success my-4 justify-right">
                    Submit
                </button>
                <a href="{{route('question.index')}}" class="button btn btn-danger ">Batal</a>
            </div>

        </form>
    </div>
</div>
</div>



@endsection
