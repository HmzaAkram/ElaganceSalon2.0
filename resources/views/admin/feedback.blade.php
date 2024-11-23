@extends('admin.dashboard')

@section('content')



<div class="container">
    <br>
    <br>
    <h2>User Feedbacks</h2>
    <table class="table table-bordered">
        <br>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Feedback</th>
                <th>Review</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($feedbacks as $feedback)
                <tr>
                    <td>{{ $feedback->name }}</td>
                    <td>{{ $feedback->email }}</td>
                    <td>{{ $feedback->feedback }}</td>
                    <td>{{ $feedback->review }}</td>
                    <td>{{ $feedback->created_at }}</td>
                    <td>{{ $feedback->updated_at }}</td>
                    <td>
                        <form action="{{ route('reviews.destroy', $feedback->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this feedback?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection


