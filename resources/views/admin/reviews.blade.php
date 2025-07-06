@extends('admin.master')

@section('title', 'Ratings & Reviews')

@section('content')
<h2 class="mb-4">Ratings & Reviews</h2>

<div class="table-responsive">
  <table class="table table-striped table-bordered align-middle">
    <thead class="table-dark">
      <tr>
        <th>User</th>
        <th>Movie</th>
        <th>Rating</th>
        <th>Review</th>
        <th>Posted On</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>john_doe</td>
        <td>Inception</td>
        <td>5 ★</td>
        <td>Mind-blowing visuals and story!</td>
        <td>2025-06-10</td>
        <td>
          <button class="btn btn-sm btn-danger">Delete</button>
        </td>
      </tr>
      <tr>
        <td>emma_94</td>
        <td>Barbie</td>
        <td>3 ★</td>
        <td>Fun but lacked depth.</td>
        <td>2025-06-15</td>
        <td>
          <button class="btn btn-sm btn-danger">Delete</button>
        </td>
      </tr>
    </tbody>
  </table>
</div>
@endsection
