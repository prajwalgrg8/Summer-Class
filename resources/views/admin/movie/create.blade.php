@extends('admin.master')

@section('title', 'Add New Movie')

@section('content')
<div class="mb-4">
  <h2>Add New Movie</h2>
</div>

<form action="#" method="POST">
  @csrf

  <div class="row g-3">
    <div class="col-md-6">
      <label for="name" class="form-label">Movie Title</label>
      <input type="text" name="name" id="name" class="form-control" placeholder="e.g., Inception" required>
    </div>

    <div class="col-md-6">
      <label for="genre_id" class="form-label">Genre</label>
      <select name="genre_id" id="genre_id" class="form-select" required>
        <option value="">-- Select Genre --</option>
        @foreach($genres as $genre)
          <option value="{{ $genre->id }}">{{ $genre->name }}</option>
        @endforeach
      </select>
    </div>

    <div class="col-md-12">
      <label for="description" class="form-label">Description</label>
      <textarea name="description" id="description" rows="3" class="form-control" placeholder="Short movie description..."></textarea>
    </div>

    <div class="col-md-4">
      <label for="duration" class="form-label">Duration (minutes)</label>
      <input type="number" step="0.1" name="duration" id="duration" class="form-control" placeholder="e.g., 148" required>
    </div>

    <div class="col-md-4">
      <label for="release_date" class="form-label">Release Date</label>
      <input type="date" name="release_date" id="release_date" class="form-control" required>
    </div>

    <div class="col-md-4">
      <label for="rating" class="form-label">Rating</label>
      <input type="number" step="0.1" name="rating" id="rating" class="form-control" placeholder="e.g., 8.7" required>
    </div>

    <div class="col-md-6">
      <label for="language" class="form-label">Language</label>
      <input type="text" name="language" id="language" class="form-control" placeholder="e.g., English" required>
    </div>

    <div class="col-md-6">
      <label for="cast" class="form-label">Cast</label>
      <input type="text" name="cast" id="cast" class="form-control" placeholder="e.g., Leonardo DiCaprio, Tom Hardy">
    </div>

    <div class="col-12">
      <button type="submit" class="btn btn-success">Submit</button>
      <a href="{{ route('admin.movie.index') }}" class="btn btn-secondary">Cancel</a>
    </div>
  </div>
</form>
@endsection
