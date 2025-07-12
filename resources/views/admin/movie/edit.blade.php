@extends('admin.master')

@section('title', 'Add New Movie')

@section('content')
<div class="mb-4">
  <h2>Edit Movie</h2>
</div>

<form action="{{ route('admin.movie.update', $movie->id) }}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('PUT')
  <div class="row g-3">
    <div class="col-md-6">
      <label for="name" class="form-label">Movie Title</label>
      <input type="text" name="name" id="name" class="form-control" value="{{ old('name') ?? $movie->name }}" required>
      @error('name')
      <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>

    <div class="col-md-6">
      <label for="genre_id" class="form-label">Genre</label>
      <select name="genre_id" id="genre_id" class="form-select" required>
        <option value="">-- Select Genre --</option>
        @foreach($genres as $genre)
          <option value="{{ $genre->id }}" @if((old('genre_id') ?? $movie->genre_id) ==$genre->id) selected @endif>{{ $genre->name }}></option>
        @endforeach
      </select>
      @error('genre_id')
      <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>

    <div class="col-md-12">
      <label for="description" class="form-label">Description</label>
      <textarea name="description" id="description" rows="3" class="form-control" value="{{ old('description') ?? $movie->description }}"></textarea>
      @error('description')
      <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>

    <div class="col-md-4">
      <label for="duration" class="form-label">Duration (minutes)</label>
      <input type="number" name="duration" id="duration" class="form-control" value="{{ old('duration') ?? $movie->duration }}" required>
      @error('duration')
      <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>

    <div class="col-md-4">
      <label for="release_date" class="form-label">Release Date</label>
      <input type="date" name="release_date" id="release_date" class="form-control" value="{{ old('release_date') ?? $movie->release_date }}" required>
      @error('release_date')
      <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>

    <div class="col-md-4">
      <label for="rating" class="form-label">Rating</label>
      <input type="number" step="0.1" name="rating" id="rating" class="form-control" placeholder="e.g., 8.7" value="{{ old('rating') ?? $movie->rating }}" required>
      @error('rating')
      <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>

     <div class="col-md-4">
      <label for="image" class="form-label">Image <a target="_blank" href="{{ asset($movie->image) }}">Existing Image</a></label>
      <input type="file" name="image" id="image" class="form-control">
      @error('image')
      <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>

    <div class="col-md-6">
      <label for="language" class="form-label">Language</label>
      <input type="text" name="language" id="language" class="form-control" value="{{ old('language') ?? 'english' }}" required>
      @error('language')
      <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>

    <div class="col-md-6">
      <label for="cast" class="form-label">Cast</label>
      <input type="text" name="cast" id="cast" class="form-control" value="{{ old('cast') ?? $movie->cast }}">
      @error('cast')
      <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>

    <div class="col-12">
      <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure you want to update this movie?')">
        Update Movie
      </button>
      <a href="{{ route('admin.movie.index') }}" class="btn btn-secondary">Cancel</a>
    </div>
  </div>
</form>
@endsection
