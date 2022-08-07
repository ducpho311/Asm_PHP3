@extends('admin.layout.master')
@section('title', ' Danh mục')
@section('content-title',  ' Danh sách danh mục')
@section('content')
<h3 class="card-title"><a href="{{route('admin.category.create')}}" class="btn btn-success">Tạo mới</a></h3>
<table class="table table-hover text-nowrap">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th colspan="2">Chức năng</th>
      </tr>
    </thead>
    <tbody>
      @foreach($category_list as $category)
      <tr>
        <td>{{$category->id}}</td>
        <td>{{$category->name}}</td>
        <td>
              <a class="btn btn-success" href="{{route('admin.category.update',  $category->id)}}">Sửa</a>
            <form action="{{route('admin.category.delete',  $category->id)}}" method="post">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger">Xóa</button>
            </form>
          </td>
        
      </tr>
      @endforeach
  </table>
@endsection
