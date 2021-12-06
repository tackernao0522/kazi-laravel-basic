@extends('admin.admin_master')

@section('admin')
<div class="card card-default">
  <div class="card-header card-header-border-bottom">
    <h2>User Profile Update</h2>
  </div>
  <div class="card-body">
    <form method="POST" action="{{-- route('password.update') --}}" class="form-pill">
      @csrf
      <div class="form-group">
        <label for="exampleFormControlInput3">User Name</label>
        <input type="text" name="name" class="form-control" value="{{ old('name', $user->name) }}">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput3">User Email</label>
        <input type="email" name="email" class="form-control" value="{{ old('email', $user->email) }}">
      </div>

      <button type="submit" class="btn btn-primary btn-default">Update</button>
    </form>
  </div>
</div>
@endsection
