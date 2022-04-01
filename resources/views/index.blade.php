@extends('layout')
@section('content')
<style>
  .push-top {
    margin-top: 50px;
  }
</style>
<div class="push-top">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <div class="header">
      <div class="col-md-4">
          <h4>Laravel CRUD</h4>
      </div>
      <div class="col-md-8">
        <a class="btn btn-success" href="{{ route('users.create') }}">Create Users</a>
      </div>
  </div>
  <table class="table">
    <thead>
        <tr class="table-warning">
          <td>ID</td>
          <td>UserName</td>
          <td>Email</td>
          <td>Phone</td>
          <td>Date of Birth</td>
          <td>City</td>
          <td>Country</td>
          <td>Active</td>
          <td class="text-center">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($user as $users)
        <tr>
            <td>{{$users->id}}</td>
            <td>{{$users->name}}</td>
            <td>{{$users->email}}</td>
            <td>{{$users->phone}}</td>
            <td>{{$users->dob}}</td>
            <td>{{$users->city}}</td>
            <td>{{$users->country}}</td>
            <td>{{$users->active_status=="1" ? "Yes":"No"}}</td>
            <td class="text-center">
                <a href="{{ route('users.edit', $users->id)}}" class="btn btn-primary btn-sm">Edit</a>
                <form action="{{ route('users.destroy', $users->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                  </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection