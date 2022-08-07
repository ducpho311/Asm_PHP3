


@extends('admin.layout.master')
@section('title', ' Update Product')
@section('content-title',  ' Update Product')
@section('content')

<form action="{{route('admin.product.updateProduct', $product->id)}}" method="post" enctype="multipart/form-data" autocomplete="off">
    @csrf
    <div class="form-group">
        <label for="">Tên sản phẩm</label>
        <input type="text" name="name" value="{{$product->name}}" placeholder="Nhập vào tên sản phẩm" id="" class="form-control">
        @if ($errors->has('name'))
        <span class="text-danger text-sm"> {{ $errors->first('name') }}</span>
      @endif
    </div>
    <div class="form-group">
        <label for="">Giá sản phẩm</label>
        <input type="number" name="price" value="{{$product->price}}" placeholder="Nhập vào giá sản phẩm" id="" class="form-control">
        @if ($errors->has('price'))
        <span class="text-danger text-sm"> {{ $errors->first('price') }}</span>
      @endif
    </div>
    <div class="form-group">
        <label for="">Số lượng sản phẩm</label>
        <input type="number" name="quantity" value="{{$product->quantity}}" placeholder="Nhập vào số lương sản phẩm" id="" class="form-control">
        @if ($errors->has('quantity'))
        <span class="text-danger text-sm"> {{ $errors->first('quantity') }}</span>
      @endif
    </div>
    <div class="form-group">
        <label class="form-label">Ảnh sản phẩm</label><br>
        <img class="" src="{{asset($product->avatar)}}" name="avatar" alt="" width="250px">
        <input type="hidden" class="form-control" value="{{$product->avatar}}" name="avatar" aria-describedby="avatar">
        <input type="file" class="form-control" value="" name="avatar_up" aria-describedby="avatar">
        @if ($errors->has('avatar'))
        <span class="text-danger text-sm"> {{ $errors->first('avatar') }}</span>
      @endif
    </div>
    <div class="form-group">
        <label for="">Giá khiến mại</label>
        <input type="number" name="promotion" value="{{$product->promotion}}" placeholder="Có thể nhập giá khuyến mại hoặc không" id="" class="form-control">
        @if ($errors->has('promotion'))
        <span class="text-danger text-sm"> {{ $errors->first('promotion') }}</span>
      @endif
    </div>
    <div class="form-group">
        <label for="">Trạng thái</label>
        <select name="status" id="" class="form-control">
            <option {{$product->status == 0 ? 'selected' : ''}} value="0">Hết hàng</option>
            <option {{$product->status == 1 ? 'selected' : ''}} value="1">Còn hàng</option>
        </select>
    </div>
    <div class="form-group">
        <label for="size_id">Size</label>
        <select name="size_id" id="" class="form-control">
            @foreach($size_list as $key)
            <option {{$product->size_id == $key->id ? 'selected' : ''}} value="{{$key->id}}">{{$key->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="category_id">Danh mục</label>
        <select name="category_id" id="" class="form-control">
            @foreach($category as $key)
            <option {{$product->category_id == $key->id ? 'selected' : ''}} value="{{$key->id}}">{{$key->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="">Mô tả</label>
        <textarea name="description" id="" value="{{$product->description}}" cols="30" rows="4" class="form-control" placeholder="Nhập vào mô tả sản phẩm...">{{$product->description}}</textarea>
        @if ($errors->has('description'))
        <span class="text-danger text-sm"> {{ $errors->first('description') }}</span>
      @endif
    </div>
    <div>
        <button class="btn btn-primary" type="submit">Cập nhật</button>
        <a href="{{route('admin.product.list')}}" class="btn btn-danger">Quay lại</a>
    </div>
</form>

@endsection