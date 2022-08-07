@extends('admin.layout.master')
@section('title', ' Update Category')
@section('content-title',  ' Chỉnh sửa danh mục')
@section('content')

<form action="{{route('admin.category.updateCategory', $category->id)}}" method="post" enctype="multipart/form-data" autocomplete="off">
    @csrf
    <div class="form-group">
        <label for="">Tên danh mục</label>
        <input type="text" name="name" value="{{$category->name}}" id="" class="form-control">
        @if ($errors->has('name'))
        <span class="text-danger text-sm"> {{ $errors->first('name') }}</span>
        @endif
    </div>
    <div>
        <button class="btn btn-primary" type="submit">Cập nhật</button>
        <a href="{{route('admin.category.list')}}" class="btn btn-danger">Quay lại</a>
    </div>
</form>

@endsection