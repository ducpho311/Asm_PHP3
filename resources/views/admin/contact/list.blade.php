@extends('admin.layout.master')
@section('title', 'Liên hệ')
@section('content-title',  ' Danh sách liên hệ')
@section('content')
<table class="table table-hover text-nowrap">
    <thead>
      <tr>
        <th>ID</th>
        <th>Họ tên</th>
        <th>Số điện thoại</th>
        <th>Email</th>
        <th>Nội dung</th>
        <th>Thời gian</th>
        <th>Chức năng</th>
      </tr>
    </thead>
    <tbody>
      @foreach($contact_list as $contact)
      <tr>
        <td>{{$contact->id}}</td>
        <td>{{$contact->name}}</td>
        <td>{{$contact->phone}}</td>
        <td>{{$contact->email}}</td>
        <td>{{$contact->content}}</td>
        <th>{{$contact->created_at}}</th>
        <td>
          <form action="{{route('admin.contact.delete',  $contact->id)}}" method="post">
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
