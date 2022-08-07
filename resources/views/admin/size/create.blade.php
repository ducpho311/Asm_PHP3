@extends('admin.layout.master')
@section('title', 'Product')
@section('content-title', 'product')

@section('content')
<h1>Thêm mới kích thước</h1>
<form action="{{route('admin.size.sizeCreate')}}" method="post" enctype="multipart/form-data" autocomplete="off">
  @csrf
  <div class="form-group">
      <label for="">Kích thước</label>
      <input type="text" name="name" placeholder="Nhập vào kích thước" id="" class="form-control" >
  </div>
  <div>
      <button class="btn btn-primary" type="submit">Thêm mới</button>
      <button class="btn btn-danger" type="reset">Nhập lại</button>
  </div>
</form>
@endsection