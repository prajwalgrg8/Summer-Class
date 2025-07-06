@extends('admin.master')

@section('title', 'Reports')

@section('content')
<h2 class="mb-4">Reports Dashboard</h2>

<div class="row g-4">
  <div class="col-md-4">
    <div class="card text-white bg-primary">
      <div class="card-body">
        <h5 class="card-title">Top Rated Movies</h5>
        <p class="card-text fs-4">15</p>
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="card text-white bg-success">
      <div class="card-body">
        <h5 class="card-title">New User Registrations (Last 30 days)</h5>
        <p class="card-text fs-4">230</p>
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="card text-white bg-warning">
      <div class="card-body">
        <h5 class="card-title">Most Watched Movies</h5>
        <p class="card-text fs-4">Inception</p>
      </div>
    </div>
  </div>
</div>

<div class="mt-4">
  <h4>Genre Popularity</h4>
  <ul>
    <li>Action: 3200 views</li>
    <li>Drama: 2800 views</li>
    <li>Comedy: 2500 views</li>
  </ul>
</div>

<div class="mt-4">
  <h4>Reviews Summary</h4>
  <p>Total Reviews: 5000</p>
  <p>Positive: 4200</p>
  <p>Negative: 800</p>
</div>
@endsection
