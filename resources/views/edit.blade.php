@extends('layout')
@section('content')
<style>
    .container {
      max-width: 450px;
    }
    .push-top {
      margin-top: 50px;
    }
</style>
<div class="card push-top">
  <div class="card-header">
    Edit & Update
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('users.update', $user->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name" value="{{ $user->name }}"/>
          </div>
          <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" value="{{ $user->email }}"/>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" value="{{ $user->password }}"/>
            </div>
          <div class="form-group">
              <label for="phone">Phone</label>
              <input type="tel" class="form-control" name="phone" value="{{ $user->phone }}"/>
          </div>
          <div class="form-group">
              <label for="dob">Date of Birth</label>
              <input type="date" class="form-control" name="dob" value="{{ $user->dob }}"/>
          </div><br>
          <div class="form-group">
            <div class="row">
              <div class="col-md-6">
                <label class="form-label" for="city">City</label>
                <select class="select" name="city" id="city" >
                  <option value="">City</option>
                  <option value="Dhaka" {{ ($user->city=="Dhaka")? "selected" : "" }}>Dhaka</option>
                  <option value="Savar" {{ ($user->city=="Savar")? "selected" : "" }}>Savar</option>
                  <option value="Gazipur" {{ ($user->city=="Gazipur")? "selected" : "" }}>Gazipur</option>
                </select>
              </div>
              <div class="col-md-6">
                <label class="form-label" for="country">Country</label>
                <select class="select" name="country" id="country">
                  <option value="">Country</option>
                  <option value="Banlgadesh" {{ ($user->country=="Banlgadesh")? "selected" : "" }}>Banlgadesh</option>
                  <option value="India" {{ ($user->country=="India")? "selected" : "" }}>India</option>
                  <option value="USA" {{ ($user->country=="USA")? "selected" : "" }}>USA</option>
                </select>
              </div>
            </div>
          </div><br>
          <dvi class="form-group">
            <label class="form-label" for="active">Active:</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="active_status" id="active_yes" value="1" {{ ($user->active_status=="1")? "checked" : "" }}>
              <label class="form-check-label" for="active_yes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="active_status" id="active_no" value="0" {{ ($user->active_status=="0")? "checked" : "" }}>
              <label class="form-check-label" for="active_no">No</label>
            </div>
          </dvi><br>
          <button type="submit" class="btn btn-block btn-danger">Update User</button>
          <a class="btn btn-success" href="{{ route('users.index') }}">View Users</a>
      </form>
  </div>
</div>
@endsection