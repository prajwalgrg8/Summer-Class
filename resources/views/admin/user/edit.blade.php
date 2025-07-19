@extends('admin.master')

@section('title', 'Add New User')

@section('content')
<div class="mb-4">
  <h2>Update User</h2>
</div>

<form action="{{ route('admin.user.update', $user-> id ) }}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('PUT')
  <div class="row g-3">
    <div class="col-md-6">
      <label for="name" class="form-label">Full Name</label>
      <input type="text" name="name" id="name" class="form-control" placeholder="e.g., John Doe" value="{{ old('name') ?? $user-> name }}" required>
      @error('name')
      <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>

    <div class="col-md-6">
      <label for="email" class="form-label">Email Address</label>
      <input type="email" name="email" id="email" class="form-control" placeholder="e.g., john@example.com" value="{{ old('email') ?? $user-> email }}" required>
      @error('email')
      <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>

    <div class="col-md-6">
      <label for="password" class="form-label">Password</label>
      <input type="password" name="password" id="password" class="form-control" value="{{ old('password') ?? $user->password }}"required>
      @error('password')
      <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>

    <div class="col-md-6">
      <label for="password_confirmation" class="form-label">Confirm Password</label>
      <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" value="{{ old('password_confrimation')}}"required>
      @error('password_confirmation')
      <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>

    <div class="col-md-6">
      <label for="image" class="form-label">Image <a target="_blank" href="{{ asset($user->image) }}">Existing Image</label>
      <input type="file" name="image" id="email" class="form-control">
      @error('image')
      <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>

    <div class="col-12">
      <button type="submit" class="btn btn-success" onclick="return confirm('Are you sure you want to update this user?')">Update User</button>
      <a href="{{ route('admin.user.index') }}" class="btn btn-secondary">Cancel</a>
    </div>
  </div>
</form>
@endsection
