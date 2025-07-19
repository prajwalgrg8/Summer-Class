@extends('admin.master')

@section('title', 'Manage Users')

@push('css')
<style>
    img {
        width: auto;
        height: 5rem;
    }
</style>
@endpush

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
  <h2>Users Management</h2>
  <a href="{{ route('admin.user.create') }}" class="btn btn-primary">+ Add New User</a>
</div>

<div class="table-responsive">
  <table class="table table-striped table-bordered align-middle">
    <thead class="table-dark">
      <tr>
        <th>ID</th>
        <th>Image</th>
        <th>Name</th>
        <th>Email</th>
        <th>Registered On</th>
        <!--<th>Status</th>-->
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $user )
      <tr>
        <td>{{ $user-> id }}</td>
        <td><a href="{{ asset($user->image) }}" target="_blank"> <img src="{{ asset($user->image) }}"></a></td>
        <td>{{ $user-> name }}</td>
        <td>{{ $user-> email }}</td>
        <td>{{ $user-> created_at }}</td>
        <!--<td><span class="badge bg-success">Active</span></td>-->
        <td>
          <a href="{{ route('admin.user.edit',$user->id) }}" class="btn btn-sm btn-warning" title='Edit'> <i class="bi bi-pencil-square"></i></a>
          <form action="{{ route('admin.user.delete', $user->id) }}" method="POST" style="display: inline;"
                        onsubmit="return confirm('Are you sure you want to delete this user?')">
                        @csrf 
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" title="Delete">
                            <i class="bi bi-trash"></i>
                        </button>
                    </form>
        </td>
      </tr>
       @endforeach
    </tbody>
  </table>
</div>
@endsection
