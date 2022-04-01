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
    Add User
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
      <form method="post" action="{{ route('users.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Username</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email"/>
          </div>
          <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" name="password"/>
          </div>
          <div class="form-group">
              <label for="phone">Phone</label>
              <input type="tel" class="form-control" name="phone"/>
          </div>
          <div class="form-group">
              <label for="dob">Date of Birth</label>
              <input type="date" class="form-control" name="dob"/>
          </div><br>
          <div class="form-group">
            <div class="row">
              <div class="col-md-6">
                <label class="form-label" for="city">City</label>
                <select class="select" name="city" id="city" >
                  <option value="">City</option>
                  <option value="Dhaka">Dhaka</option>
                  <option value="Savar">Savar</option>
                  <option value="Gazipu">Gazipur</option>
                </select>
              </div>
              <div class="col-md-6">
                <label class="form-label" for="country">Country</label>
                <select class="select" name="country" id="country">
                  <option value="">Country</option>
                  <option value="Bangladesh">Banlgadesh</option>
                  <option value="India">India</option>
                  <option value="USA">USA</option>
                </select>
              </div>
            </div>
          </div><br>
          <dvi class="form-group">
            <label class="form-label" for="active">Active:</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="active_status" id="active_yes" value="1">
              <label class="form-check-label" for="active_yes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="active_status" id="active_no" value="0">
              <label class="form-check-label" for="active_no">No</label>
            </div>
          </dvi><br>
          <div class="create-btn">
            <button type="submit" class="btn btn-block btn-danger">Create User</button>
            <a class="btn btn-success" href="{{ route('users.index') }}">View Users</a>
          </div>
      </form>
  </div>
</div>
@endsection