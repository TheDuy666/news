@extends('layout/master')

@section('title', 'Trang Chủ')

@section('content')
    <h1>Tao Ban tin</h1>
    <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>
    <form action="/home/create" method="POST">
        @csrf
        <label>
            <input name="title" class="form-control" placeholder="Tieu de">
        </label>
        <textarea  id="editor" class="form-control mt-3" name="content" placeholder=" Noi dung"></textarea>
        <button type="submit" class="btn btn-primary btn-lg mt-3">Luu</button>
    </form>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection

