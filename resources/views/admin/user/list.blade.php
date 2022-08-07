@extends('admin.layout.master')
@section('title', ' List User')
@section('content-title',  ' Danh sánh người dùng')

@section('content')
<table class="table table-hover text-nowrap">
    <thead>
      <tr>
        <th>ID</th>
        <th>Họ tên</th>
        <th>Email</th>
        <th>Quyền</th>
        <th>Trạng thái</th>
      </tr>
    </thead>
    <tbody>
      @foreach($user_list as $user)
      <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
         <!-- cấp quyền ------------------------------------------------------------------------------------>
        @if(($user->role) == 0)
        <td>
          <form action="{{route('admin.user.role', $user->id)}}" method="post">
            @csrf
            <button class="btn btn-info">Người dùng</button>
          </form>
        </td>
        @else
        <td><form action="{{route('admin.user.role', $user->id)}}" method="post">
            @csrf
            <button class="btn btn-success">Admin</button>
        </form></td>
        @endif
        <!-- cập nhật trạng thái người dùng ----------------------------------------------------------------->
        @if (($user->status) == 1)
        <td>
          <form action="{{route('admin.user.status', $user->id)}}" method="POST">
            @csrf
            <button class="btn btn-success">Đang mở</button>
          </form>
        </td>
        @elseif(($user->status) == 0)
        <td>
          <form action="{{route('admin.user.status', $user->id)}}" method="POST">
            @csrf
            <button class="btn btn-danger">Đã khóa</button>
          </form>
        </td>
        @endif
      </tr>
      @endforeach
  </table>
@endsection
