@extends('layout/master')

@section('title', 'Trang Chủ')

@section('content')
    <a href=""></a>
    <table class="table table-bordered table-hover" >
        <tr class="table-active text-center">
            <th>ID</th>
            <th>Tiêu đề</th>
            <th>Ngày tạo</th>
            <th>Hành động</th>
        </tr>
        @forelse($allNews as $news)
            <tr>
                <td class="text-center">{{$news-> id}}</td>
                <td class="fw-bold">{{$news-> title}}</td>
                <td>{{$news-> created_at}}</td>
                <td class="d-flex justify-content-around align-content-center">
                    <a class="btn btn-sm btn-info" href="/home/news/{{$news->id}}">Xem</a>
                    <a class="btn btn-sm btn-warning" href="">Sửa</a>
                    <form onsubmit="return confirm('Ban co muon xoa')" action="/home/news/{{$news-> id}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-sm btn-danger" >Xoa</button>
                    </form>
                </td>
            </tr>
        @empty
        @endforelse
    </table>
@endsection

