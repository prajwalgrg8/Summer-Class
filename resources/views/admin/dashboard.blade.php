@extends('admin.master')

@section('content')
  <h2 class="mb-4">Dashboard Overview</h2>

  <div class="row">
    <div class="col-md-3">
      <div class="card text-white bg-primary mb-3">
        <div class="card-body">
          <h5 class="card-title">Total Movies</h5>
          <p class="card-text">30</p>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card text-white bg-success mb-3">
        <div class="card-body">
          <h5 class="card-title">Total Users</h5>
          <p class="card-text">5</p>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card text-white bg-warning mb-3">
        <div class="card-body">
          <h5 class="card-title">Average Rating</h5>
          <p class="card-text">4.3 ★</p>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card text-white bg-danger mb-3">
        <div class="card-body">
          <h5 class="card-title">Top Rated Movie</h5>
          <p class="card-text fs-6">The Shawshank Redemption</p>
        </div>
      </div>
    </div>
  </div>

  <div class="mt-4">
    <h4>Recent Activities</h4>
    <ul class="list-group">
      <li class="list-group-item">User <strong>john_doe</strong> rated <strong>Inception</strong> 5★</li>
      <li class="list-group-item">New movie <strong>Oppenheimer</strong> added to the database</li>
      <li class="list-group-item">Genre <strong>Thriller</strong> was updated</li>
      <li class="list-group-item">User <strong>emma_94</strong> added <strong>The Matrix</strong> to their watchlist</li>
    </ul>
  </div>
@endsection
