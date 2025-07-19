@extends('admin.master')

@push('css')
<style>
    img {
        width: auto;
        height: 5rem;
    }
</style>
@endpush

@section('content')
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Manage Movies</h2>
    <a href="{{ route('admin.movie.create') }}" class="btn btn-primary">+ Add New Movie</a>

  </div>

  <!--Search form-->
  <div class="mb-3">
    <form action="{{ route('admin.movie.index') }}" method="GET">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Search Movie here"
                value="{{ request()->search }}">

            <select name="genre_id" class="form-select" style="max-width: 200px;">
                <option value="">Select Genre</option>
                @foreach($genres as $genre)
                <option value="{{ $genre->id }}" @if($genre->id == request()->genre_id) selected @endif>
                    {{ $genre->name }}
                </option>
                @endforeach
            </select>

            <button class="btn btn-outline-primary" type="submit">Search</button>
        </div>
    </form>
</div>

<div class="table-responsive">
    <table class="table table-striped table-bordered align-middle">
      <thead class="table-dark">
        <tr>
          <th>#</th>
          <th>Image</th>
          <th>Name</th>
          <th>Description</th>
          <th>Genre</th>
          <th>Duration</th>
          <th>Release Date</th>
          <th>Rating</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($movies as $movie )
        <tr>
          <td>{{$loop -> index + 1}}</td>
          <td><a href="{{ asset($movie->image) }}" target="_blank"> <img src="{{ asset($movie->image) }}"></a></td>
          <td>{{$movie -> name}}</td>
          <td>{{$movie -> description}}</td>
          <td>{{ $movie->genre->name ?? 'N/A' }}</td>
          <td>{{$movie -> duration}}</td>
          <td>{{$movie -> release_date}}</td>
          <td>{{$movie -> rating}}</td>
          <td>
            <a href="{{ route('admin.movie.edit',$movie->id) }}" class="btn btn-sm btn-warning" title='Edit'> <i class="bi bi-pencil-square"></i></a>

            <form action="{{ route('admin.movie.delete', $movie->id) }}" method="POST" style="display: inline;"
                        onsubmit="return confirm('Are you sure you want to delete this movie?')">
                        @csrf 
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" title="Delete">
                            <i class="bi bi-trash"></i>
                        </button>
                    </form>
          </td>   
          @endforeach
      </tbody>
    </table>
  </div>
@endsection
