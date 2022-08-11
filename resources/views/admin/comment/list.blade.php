@extends('admin.layout.master')
@section('title', 'Bình luận')
@section('content-title',  ' Danh sách bình luận')
@section('content')
<table class="table table-hover text-nowrap">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nội dung</th>
        <th>Người dùng</th>
        <th>Sản phẩm</th>
        <th>Ảnh sản phẩm</th>
        <th>Chức năng</th>
      </tr>
    </thead>
    <tbody>
      @foreach($comment_list as $item)
      <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->content}}</td>
        <td>{{  $item->user->name  }}</td>
        <td>{{ $item->product->name  }}</td>
        <th><img style="width: 100px" src="{{asset($item->product->avatar)}}" alt=""></th>
        <td>
          <form action="{{route('admin.comment.delete',  $item->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">
              Xóa
            </button>
          </form>
        </td>
      </tr>
      @endforeach
  </table>
  <div class="">
    </div>
@endsection
