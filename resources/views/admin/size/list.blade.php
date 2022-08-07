@extends('admin.layout.master')
@section('title', ' Kích thước')
@section('content-title',  'Danh sách kích thước')

@section('content')
<h3 class="card-title"><a href="{{route('admin.size.create')}}" class="btn btn-success">Tạo mới</a></h3>
<table class="table table-hover text-nowrap">
    <thead>
      <tr>
        <th>ID</th>
        <th>Kích thước</th>
        <th colspan="2">Chức năng</th>
      </tr>
    </thead>
    <tbody>
      @foreach($size_list as $size)
      <tr>
        <td>{{$size->id}}</td>
        <td>{{$size->name}}</td>
        <td>
            <form action="{{route('admin.size.update',  $size->id)}}" method="get">
              @csrf
              <button class="btn btn-success">Sửa</button>
            </form>
            <form action="{{route('admin.size.delete',  $size->id)}}" method="post">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger">Xóa</button>
            </form>
          </td>
        
      </tr>
      @endforeach
  </table>
@endsection
