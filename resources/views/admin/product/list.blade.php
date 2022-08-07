@extends('admin.layout.master')
@section('title', ' List Product')
@section('content-title',  ' list product')

@section('content')
<h3 class="card-title"><a href="{{route('admin.product.create')}}" class="btn btn-success">Tạo mới</a></h3>
<table class="table table-hover text-nowrap">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Giá</th>
        <th>Số lượng</th>
        <th>Kích thước</th>
        <th>Avatar</th>
        <th>Giá khuyến mại</th>
        <th>Danh mục</th>
        <th>Trạng thái</th>
        <th colspan="2" class="text-center">Chức năng</th>
      </tr>
    </thead>
    <tbody>
      @foreach($product_list as $product)
      <tr>
        <td>{{$product->id}}</td>
        <td>{{$product->name}}</td>
        <td>{{$product->price}}</td>
        <td>{{$product->quantity}}</td>
        <td>{{ isset($product->size) ? $product->size->name : '' }}</td>
        <td><img src="{{asset($product->avatar)}}" alt="" style="width: 150px;"></td>
        <td>{{$product->promotion}}</td>
        <td>{{ isset($product->category) ? $product->category->name : '' }}</td>
        @if ($product['status'] == 1)
        <td>
          <form action="{{route('admin.product.status', [$product->id, $product->status])}}" method="POST">
            @csrf
            <button class="btn btn-primary">Còn hàng</button>
          </form>
        </td>
        @else
        <td>
          <form action="{{route('admin.product.status', [$product->id, $product->status])}}" method="POST">
            @csrf
            <button class="btn btn-danger">Hết hàng</button>
          </form>
        </td>
        @endif
       
        <td>
          <form action="{{route('admin.product.update',  $product->id)}}" method="get">
            @csrf
            <button class="btn btn-success">Sửa</button>
          </form>

          <form action="{{route('admin.product.delete',  $product->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">Xóa</button>
          </form>
        </td>
      </tr>
      @endforeach
  </table>
@endsection
