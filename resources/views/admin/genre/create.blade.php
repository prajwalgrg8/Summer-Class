@extends('admin.master')

@section('title', 'Add New Genre')

@section('content')
<div class="mb-4">
  <h2>Add New Genre</h2>
</div>

<form action="{{ route('admin.genre.store') }}" method="POST">
  @csrf

  <div class="row g-3">
    <div class="col-md-6">
      <label for="name" class="form-label">Genre Name</label>
      <input type="text" name="name" id="name" class="form-control" placeholder="e.g., Mystery, Fantasy" value = "{{ old('name') }}" required>
    </div>

    <div class="col-md-6">
      <label for="description" class="form-label">Description</label>
      <input type="text" name="description" id="description" class="form-control" placeholder="Short description (optional)" value = "{{ old('description') }}">
    </div>

    <div class="col-12 mt-3">
      <button type="submit" class="btn btn-success" onclick="return confirm('Are you sure you want to add this genre?')">Submit</button>
      <a href="{{ route('admin.genre.index') }}" class="btn btn-secondary">Cancel</a>
    </div>
  </div>
</form>
@endsection
