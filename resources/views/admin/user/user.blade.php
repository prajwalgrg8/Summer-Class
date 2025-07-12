@extends('admin.master')

@section('title', 'Manage Users')

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
        <td>{{ $user-> name }}</td>
        <td>{{ $user-> email }}</td>
        <td>2025-05-1</td>
        <!--<td><span class="badge bg-success">Active</span></td>-->
        <td>
          <button class="btn btn-sm btn-warning">Ban</button>
          <button class="btn btn-sm btn-danger">Delete</button>
        </td>
      </tr>
       @endforeach
    </tbody>
  </table>
</div>
@endsection
