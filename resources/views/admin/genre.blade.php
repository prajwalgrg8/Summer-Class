@extends('admin.master')

@section('title', 'Manage Genres')

@section('content')
<div class="mb-4">
  <h2 class="mb-3">Add New Genre</h2>
  <form action="{{ url('/admin/genres') }}" method="POST">
    @csrf
    <div class="row g-3">
      <div class="col-md-4">
        <label for="name" class="form-label">Genre Name</label>
        <input type="text" id="name" name="name" class="form-control" placeholder="e.g., Thriller" required>
      </div>
      <div class="col-md-6">
        <label for="description" class="form-label">Description</label>
        <input type="text" id="description" name="description" class="form-control" placeholder="Short genre description" required>
      </div>
      <div class="col-md-2 d-flex align-items-end">
        <button type="submit" class="btn btn-success w-100">Add Genre</button>
      </div>
    </div>
  </form>
</div>

<hr class="my-4">

<h3>Existing Genres</h3>
<div class="row">
  <div class="col-md-3 mb-3">
    <div class="card text-white bg-dark h-100">
      <div class="card-body text-center">
        <h5 class="card-title">Action</h5>
        <p class="card-text">Fast-paced, high-stakes, adrenaline-filled.</p>
      </div>
      <div class="card-footer text-center">
        <button class="btn btn-sm btn-warning">Edit</button>
        <button class="btn btn-sm btn-danger">Delete</button>
      </div>
    </div>
  </div>

  <div class="col-md-3 mb-3">
    <div class="card text-white bg-success h-100">
      <div class="card-body text-center">
        <h5 class="card-title">Comedy</h5>
        <p class="card-text">Light-hearted and humorous.</p>
      </div>
      <div class="card-footer text-center">
        <button class="btn btn-sm btn-warning">Edit</button>
        <button class="btn btn-sm btn-danger">Delete</button>
      </div>
    </div>
  </div>

  {{-- More genres can be added dynamically --}}
</div>
@endsection
