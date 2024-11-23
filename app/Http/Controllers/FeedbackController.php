<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback; // Make sure to import the Feedback model

class FeedbackController extends Controller
{
    // Example controller method
public function store(Request $request)
{
    // Validate and store feedback
    $request->validate([
        'name' => 'required|string|max:255',
        'feedback' => 'required|string',
    ]);

    // Assuming you have a Feedback model
    Feedback::create($request->all());

    // Return a success response
    return response()->json(['message' => 'Thank you for your feedback!'], 200);
}

}


