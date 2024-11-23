@extends('admin.dashboard')

@section('content')
    <!-- Button to Add New Service -->
    <div class="container mt-5 d-flex justify-content-between">
        <h2>Available Services</h2>
        @if (Auth::user()->role == '0')

        <a href="{{ route('admin.services.create') }}" class="btn btn-success">Add New Service</a>
        @endif
    </div>

    <!-- Display Services Table -->
    <div class="container mt-3" >
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($services as $service)
                    <tr>
                        <td>{{ $service->name }}</td>
                        <td>{{ $service->description }}</td>
                         <td>
                            <img src="{{ asset('uploads/services/' . $service->image) }}" alt="{{ $service->name }}" height="80" width="auto">
                        </td>
                        <td>${{ $service->price }}</td>
                        @if (Auth::user()->role == '0')

                        <td>
                            <!-- Update button -->
                            <a href="{{ route('admin.services.edit', $service->id) }}" class="btn btn-warning">Edit</a>

                            <!-- Delete button -->
                            <form action="{{ route('admin.services.destroy', $service->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this service?')">Delete</button>
                            </form>
                        </td>
                        @endif
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>
@endsection

