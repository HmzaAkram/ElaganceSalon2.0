<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\User;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Mail\AppointmentAccepted;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
class AppointmentController extends Controller
{

    // In your Controller (e.g., AppointmentController.php)

    public function showAppointments()
    {
        // Fetch appointments from the database
        $appointments = Appointment::all(); // You can adjust this query based on your needs

        return view('admin.appointment', compact('appointments'));
    }

    // public function index()
    // {

    //     $appointments = Appointment::all();
    //     return view('admin.appointment', ['appointments' => $appointments]);
    // }
    public function userAppointments()
    {
        $services = Service::all();
        return view('users.pages.appointment', ['services' => $services]);
        // return $services;
    }
    public function create()
    {
        $users = User::all();
        $services = Service::all();
        return view('users.pages.appointment', ['users' => $users, 'services' => $services]);
    }

    public function store(Request $request)
    {


        Appointment::create([
            'userId' => $request->user_id,      // Foreign key from users table
            'serviceId' => $request->serviceId, // Foreign key from services table
            'bookDate' => $request->book_date,   // Booking date
            'bookTime' => $request->book_time,   // Booking time
            'status' => $request->status,       // Appointment status
            'paymentMethod' => $request->payment_method, // Payment method (e.g., credit_card, paypal)
            'payAmount' => $request->pay_amount, // Payment amount
        ]);


        return redirect()->route('admin.showAppointments')->with('success', 'Appointment booked successfully.');
    }

    public function show($id)
    {
        $appointment = Appointment::with(['user', 'service'])->findOrFail($id);
        return view('appointments.show', ['appointment' => $appointment]);
    }

    public function edit($id)
    {
        $appointment = Appointment::findOrFail($id);
        $users = User::all();
        $services = Service::all();
        return view('appointments.edit', ['appointment' => $appointment, 'users' => $users, 'services' => $services]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'userId' => 'required|exists:tbl_users,id',
            'serviceId' => 'required|exists:tbl_services,id',
            'bookDate' => 'required|date',
            'bookTime' => 'required',
            'status' => 'required|string',
            'paymentMethod' => 'required|string',
            'payAmount' => 'required|numeric',
        ]);

        $appointment = Appointment::findOrFail($id);
        $appointment->update($request->all());

        return redirect()->route('admin.showAppointments')->with('success', 'Appointment updated successfully.');
    }

    public function destroy($id)
    {
        $appointment = Appointment::findOrFail($id);
        $appointment->delete();

        return redirect()->route('admin.showAppointments')->with('success', 'Appointment deleted successfully.');
    }

    public function accept($id)
{
     // Find the appointment by ID
     $appointment = Appointment::with(['user', 'service'])->findOrFail($id);
    //  return $appointment;


     // Check if the appointment status is 'Pending'
     if ($appointment->status === 'pending') {
         // Update the status to 'Accepted'
         $appointment->status = 'Accepted';
         $appointment->save();
         // Send email notification to the user associated with the appointment
         Mail::to($appointment->user->email)->send(new AppointmentAccepted($appointment));

         // Optionally, you can also send an email to the logged-in user
         // Mail::to(Auth::user()->email)->send(new AppointmentAccepted($appointment));
     }

     // Redirect back with a success message
     return redirect()->back()->with('success', 'Appointment accepted and email sent to the user.');
}
//     public function accept($id)
// {
//     $appointment = Appointment::findOrFail($id);
//     $appointment->status = 'Accepted';
//     $appointment->save();

//     return redirect()->back()->with('success', 'Appointment accepted.');
// }



public function mailAccept($id)
{
    $appointment = Appointment::with(['user', 'service'])->findOrFail($id);

    if ($appointment->status === 'Pending') {
        $appointment->status = 'Accepted';
        $appointment->save();

        // Send email notification to the logged-in user's email
        $userEmail = Auth::user()->email;
        Mail::to($userEmail)->send(new AppointmentAccepted($appointment));
    }

    return redirect()->back()->with('success', 'Appointment accepted and email sent to the user.');
}

}
