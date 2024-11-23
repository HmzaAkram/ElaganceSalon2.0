@extends('admin.dashboard')
<style>
    .appointment-list {
    list-style: none;
    padding: 0;
}

.appointment-item {
    background-color: #f9f9f9; /* Light gray background */
    color: black;
    transition: transform 0.2s; /* Animation on hover */
}

.appointment-item:hover {
    transform: translateY(-3px);
}

</style>

@section('content')
    <div class="appointments-list">
        @if ($appointments->isEmpty())
        <br>

            <p style="margin-left: 50px;">No appointments found.</p>
        @else
            <ul>
                <ul class="appointment-list">
                    @foreach ($appointments as $appointment)
                        <li class="appointment-item" style="border: 1px solid #ddd; border-radius: 8px; padding: 15px; margin-bottom: 20px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);">
                            <div style="margin-bottom: 10px;">
                                <strong>User Name:</strong> {{ $appointment->user->name }}
                            </div>
                            <div style="margin-bottom: 10px;">
                                <strong>User Email:</strong> {{ $appointment->user->email }}
                            </div>
                            <div style="margin-bottom: 10px;">
                                <strong>Service Name:</strong> {{ $appointment->service->name }}
                            </div>
                            <div style="margin-bottom: 10px;">
                                <strong>Booking Date:</strong> {{ $appointment->bookDate }}
                            </div>
                            <div style="margin-bottom: 10px;">
                                <strong>Booking Time:</strong> {{ $appointment->bookTime }}
                            </div>
                            <div style="margin-bottom: 10px;">
                                <strong>Status:</strong> {{ $appointment->status }}
                            </div>
                            <div style="margin-bottom: 10px;">
                                <strong>Payment Method:</strong> {{ $appointment->paymentMethod }}
                            </div>
                            <div style="margin-bottom: 20px;">
                                <strong>Payment Amount:</strong> ${{ $appointment->payAmount }}
                            </div>

                            <!-- Button to change the status -->

                                <form action="{{ route('appointments.accept', $appointment->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn btn-success" style="margin-right: 10px;">Accept</button>
                                </form>


                            <!-- Delete button -->
                            <form action="{{ route('appointments.destroy', $appointment->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </li>
                    @endforeach
                </ul>



            </ul>
        @endif
    </div>
@endsection
