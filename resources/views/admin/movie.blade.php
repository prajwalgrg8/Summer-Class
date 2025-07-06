@extends('admin.master')

@section('content')
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Manage Movies</h2>
    <button class="btn btn-primary">+ Add New Movie</button>
  </div>

  <div class="mb-3">
    <input type="text" class="form-control" placeholder="Search movies by title, director, genre...">
  </div>

  <div class="table-responsive">
    <table class="table table-striped table-bordered align-middle">
      <thead class="table-dark">
        <tr>
          <th>Poster</th>
          <th>Title</th>
          <th>Genre</th>
          <th>Release Year</th>
          <th>Rating</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRipfEoI8fb4qxidki3e_kp3fr_Kopvoi2yCKcpJGf2ngnKweMR" alt="poster" class="img-thumbnail"></td>
          <td>The Shawshank Redemption</td>
          <td>Drama</td>
          <td>1994</td>
          <td>9.3 ★</td>
          <td>
            <button class="btn btn-sm btn-warning">Edit</button>
            <button class="btn btn-sm btn-danger">Delete</button>
          </td>
        </tr>
        <tr>
          <td><img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcQovCe0H45fWwAtV31ajOdXRPTxSsMQgPIQ3lcZX_mAW0jXV3kH" alt="poster" class="img-thumbnail"></td>
          <td>Inception</td>
          <td>Sci-Fi</td>
          <td>2010</td>
          <td>8.8 ★</td>
          <td>
            <button class="btn btn-sm btn-warning">Edit</button>
            <button class="btn btn-sm btn-danger">Delete</button>
          </td>
        </tr>
        <tr>
          <td><img src="https://wallpapercat.com/furious-7-wallpapers" alt="poster" class="img-thumbnail"></td>
          <td>Fast and Furious 7</td>
          <td>Action</td>
          <td>2015</td>
          <td>8.6 ★</td>
          <td>
            <button class="btn btn-sm btn-warning">Edit</button>
            <button class="btn btn-sm btn-danger">Delete</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
@endsection
