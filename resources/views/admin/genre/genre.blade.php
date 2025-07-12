@extends('admin.master')

@section('title', 'Manage Genres')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
  <h2>Genres</h2>
  <a href="{{ route('admin.genre.create') }}" class="btn btn-primary">+ Add Genre</a>
</div>

{{-- Genre Cards --}}
<div class="row">
  @foreach ($genres as $genre)
  <div class="col-md-3 mb-3">
    <div class="card text-white bg-dark h-100">
      <div class="card-body text-center">
        <h5 class="card-title">{{ $genre->name }}</h5>
        <p class="card-text">{{ $genre->description }}</p>
      </div>
      <div class="card-footer text-center">
        <a href="#" class="btn btn-sm btn-warning" title="Edit">
          <i class="bi bi-pencil-square"></i>
        </a>
        <form action="{{ route('admin.genre.delete', $genre->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Are you sure you want to delete this genre?')">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-sm btn-danger" title="Delete">
            <i class="bi bi-trash"></i>
          </button>
        </form>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection
