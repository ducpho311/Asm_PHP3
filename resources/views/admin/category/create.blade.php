@extends('admin.layout.master')
@section('title', 'Product')
@section('content-title', 'product')

@section('content')
<h1>Thêm mới danh mục</h1>
<form action="{{route('admin.category.categoryCreate')}}" method="post" enctype="multipart/form-data" autocomplete="off">
  @csrf
  <div class="form-group">
      <label for="">Tên danh mục</label>
      <input type="text" name="name" placeholder="Nhập vào tên danh mục" id="" class="form-control" >
      @if ($errors->has('name'))
      <span class="text-danger text-sm"> {{ $errors->first('name') }}</span>
      @endif
  </div>
  <div>
      <button class="btn btn-primary" type="submit">Thêm mới</button>
      <button class="btn btn-danger" type="reset">Nhập lại</button>
  </div>
</form>
@endsection