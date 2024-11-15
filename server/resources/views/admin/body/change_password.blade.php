@extends('admin.admin_master')

@section('admin')
<div class="card card-default">
  @if(session('error'))
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>{{ session("error") }}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  @endif

  <div class="card-header card-header-border-bottom">
    <h2>Change Password</h2>
  </div>
  <div class="card-body">
    <form method="POST" action="{{ route('password.update') }}" class="form-pill">
      @csrf
      <div class="form-group">
        <label for="exampleFormControlInput3">Current Password</label>
        <input type="password" name="oldPassword" class="form-control" id="current_password" placeholder="Current Password">
        @error('oldPassword')
        <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="form-group">
        <label for="exampleFormControlPassword3">New Password</label>
        <input type="password" name="password" class="form-control" id="password" placeholder="New Password">
        @error('password')
        <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="form-group">
        <label for="exampleFormControlPassword3">Confirm Password</label>
        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Confirm Password">
        @error('password_confirmation')
        <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>

      <button type="submit" class="btn btn-primary btn-default">Save</button>
    </form>
  </div>
</div>
@endsection
