@extends('layouts.master')

@push('script-head')
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
@endpush


@section('content')


<div class="container">
    <div class="row justify-content-center mt-5">
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
                    <textarea name="isi" id="isi" class="form-control my-editor">{!! old('isi', $isi ?? '') !!} {{$question->isi}}</textarea>                                
                </div>

                <div class="form-group">
                    <button type="submit"class="btn btn-success my-4 justify-right">
                        Update
                    </button>
                    <a href="{{route('question.index')}}" class="button btn btn-danger ">Batal</a>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection
@push('scripts')
    <script>
    var editor_config = {
        path_absolute : "/",
        selector: "textarea.my-editor",
        plugins: [
        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars code fullscreen",
        "insertdatetime media nonbreaking save table contextmenu directionality",
        "emoticons template paste textcolor colorpicker textpattern"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
        relative_urls: false,
        file_browser_callback : function(field_name, url, type, win) {
        var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
        var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

        var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
        if (type == 'image') {
            cmsURL = cmsURL + "&type=Images";
        } else {
            cmsURL = cmsURL + "&type=Files";
        }

        tinyMCE.activeEditor.windowManager.open({
            file : cmsURL,
            title : 'Filemanager',
            width : x * 0.8,
            height : y * 0.8,
            resizable : "yes",
            close_previous : "no"
        });
        }
    };

    tinymce.init(editor_config);
    </script>
@endpush