@extends('admin.dashboard')

@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Total Users</h6>
            <!-- Add Button -->
            @if (Auth::user()->role == '0')

            <a href="createUser" class="btn btn-success">Add User</a>
            @endif
        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-white">
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Address</th>
                        <th>Role</th>
                        <!-- New Role Column -->
                        @if (Auth::user()->role == '0')

                        <th>Action</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach ($myuser as $users)
                    <tr>
                        <td>{{ $users->name }}</td>
                        <td>{{ $users->email }}</td>
                        <td>{{ $users->mobile }}</td>
                        <td>{{ $users->age }}</td>
                        <td>{{ $users->gender }}</td>
                        <td>{{ $users->address }}</td>
                        <td>{{ $users->role }}</td> <!-- Display the role -->
                        @if (Auth::user()->role == '0')
                        <td>
                            <!-- Update Button -->
                            <a href="{{ route('user.edit', $users->id) }}" class="btn btn-warning btn-sm">Update</a>
                            <!-- Delete Button -->
                            <form action="{{ route('user.destroy', $users->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
