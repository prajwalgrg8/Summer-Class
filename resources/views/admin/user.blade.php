@extends('admin.master')

@section('title', 'Manage Users')

@section('content')
<h2 class="mb-4">Users Management</h2>

<div class="table-responsive">
  <table class="table table-striped table-bordered align-middle">
    <thead class="table-dark">
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Registered On</th>
        <th>Status</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>101</td>
        <td>John Doe</td>
        <td>john@example.com</td>
        <td>2025-05-01</td>
        <td><span class="badge bg-success">Active</span></td>
        <td>
          <button class="btn btn-sm btn-warning">Ban</button>
          <button class="btn btn-sm btn-danger">Delete</button>
        </td>
      </tr>
      <tr>
        <td>102</td>
        <td>Emma Watson</td>
        <td>emma@example.com</td>
        <td>2025-05-15</td>
        <td><span class="badge bg-secondary">Banned</span></td>
        <td>
          <button class="btn btn-sm btn-success">Unban</button>
          <button class="btn btn-sm btn-danger">Delete</button>
        </td>
      </tr>
    </tbody>
  </table>
</div>
@endsection
