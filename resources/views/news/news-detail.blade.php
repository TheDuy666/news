@extends('layout/master')

@section('title', 'Chi tiết tin tức')

@section('content')
@if($news == null)
    <div class="alert alert-danger" role="alert">
      Không hợp lệ!
    </div>
@else
    <h1>{{$news-> title}}</h1>
    <p>Ngày tạo: {{$news -> created_at}}</p>
    <div>
        {!! $news-> content !!}
    </div>
@endif
@endsection
