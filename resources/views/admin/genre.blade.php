@extends('admin.master')

@section('title', 'Genres')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
  <h2>Genres</h2>
  <button class="btn btn-primary">+ Add Genre</button>
</div>

{{-- Genre Cards Section --}}
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
        <p class="card-text">Light-hearted, humorous, and entertaining.</p>
      </div>
      <div class="card-footer text-center">
        <button class="btn btn-sm btn-warning">Edit</button>
        <button class="btn btn-sm btn-danger">Delete</button>
      </div>
    </div>
  </div>

  <div class="col-md-3 mb-3">
    <div class="card text-white bg-primary h-100">
      <div class="card-body text-center">
        <h5 class="card-title">Drama</h5>
        <p class="card-text">Serious storytelling, emotional depth.</p>
      </div>
      <div class="card-footer text-center">
        <button class="btn btn-sm btn-warning">Edit</button>
        <button class="btn btn-sm btn-danger">Delete</button>
      </div>
    </div>
  </div>

  <div class="col-md-3 mb-3">
    <div class="card text-white bg-info h-100">
      <div class="card-body text-center">
        <h5 class="card-title">Sci-Fi</h5>
        <p class="card-text">Futuristic, technology-driven narratives.</p>
      </div>
      <div class="card-footer text-center">
        <button class="btn btn-sm btn-warning">Edit</button>
        <button class="btn btn-sm btn-danger">Delete</button>
      </div>
    </div>
  </div>
</div>

{{-- You can continue listing genres dynamically here --}}
@endsection

