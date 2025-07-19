@extends('admin.master')

@section('title', 'Edit Genre')

@section('content')
<div class="mb-4">
  <h2>Update Genre</h2>
</div>

<form action="{{ route('admin.genre.update', $genres->id) }}" method="POST">
  @csrf
  @method('PUT')
  <div class="row g-3">
    <div class="col-md-6">
      <label for="name" class="form-label">Genre Name</label>
      <input type="text" name="name" id="name" class="form-control" placeholder="e.g., Mystery, Fantasy" value="{{ old('name') ?? $genres->name }}" required>
      @error('name')
      <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>

    <div class="col-md-6">
      <label for="description" class="form-label">Description</label>
      <input type="text" name="description" id="description" class="form-control" placeholder="Short description (optional)" value="{{ old('description') ?? $genres->description }}">
      @error('description')
      <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>

    <div class="col-12 mt-3">
      <button type="submit" class="btn btn-success" onclick="return confirm('Are you sure you want to edit this genre?')">Update Genre</button>
      <a href="{{ route('admin.genre.index') }}" class="btn btn-secondary">Cancel</a>
    </div>
  </div>
</form>
@endsection
