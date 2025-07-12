@extends('admin.master')

@section('title', 'Add New User')

@section('content')
<div class="mb-4">
  <h2>Add New User</h2>
</div>

<form action="#" method="POST">
  @csrf

  <div class="row g-3">
    <div class="col-md-6">
      <label for="name" class="form-label">Full Name</label>
      <input type="text" name="name" id="name" class="form-control" placeholder="e.g., John Doe" required>
    </div>

    <div class="col-md-6">
      <label for="email" class="form-label">Email Address</label>
      <input type="email" name="email" id="email" class="form-control" placeholder="e.g., john@example.com" required>
    </div>

    <div class="col-md-6">
      <label for="password" class="form-label">Password</label>
      <input type="password" name="password" id="password" class="form-control" required>
    </div>

    <div class="col-md-6">
      <label for="password_confirmation" class="form-label">Confirm Password</label>
      <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
    </div>

    <div class="col-12">
      <button type="submit" class="btn btn-success">Create User</button>
      <a href="{{ route('admin.user.index') }}" class="btn btn-secondary">Cancel</a>
    </div>
  </div>
</form>
@endsection
