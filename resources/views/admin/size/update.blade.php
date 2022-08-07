@extends('admin.layout.master')
@section('title', ' Update Size')
@section('content-title',  ' Chỉnh sửa kích thước')
@section('content')

<form action="{{route('admin.size.updateSize', $size->id)}}" method="post" enctype="multipart/form-data" autocomplete="off">
    @csrf
    <div class="form-group">
        <label for="">Tên danh mục</label>
        <input type="text" name="name" value="{{$size->name}}" id="" class="form-control">
        @if ($errors->has('name'))
        <span class="text-danger text-sm"> {{ $errors->first('name') }}</span>
        @endif
    </div>
    <div>
        <button class="btn btn-primary" type="submit">Cập nhật</button>
        <a href="{{route('admin.size.list')}}" class="btn btn-danger">Quay lại</a>
    </div>
</form>

@endsection