<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Models\Feedback;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
     // Display all reviews
     public function index()
     {
         $reviews = Feedback::all();
         return view('users.pages.feedback', compact('reviews'));
        // return $reviews;
     }
     public function showFeedbacks()
     {
         // Fetch appointments from the database
         $feedbacks = Feedback::all(); // You can adjust this query based on your needs

         return view('admin.feedback', compact('feedbacks'));
     }
     public function store(Request $request)
     {

        // return $request->all();

        //  $request->validate([
        //     //  'appoint_id' => 'required|integer',
        //      'name' => 'required|string|max:255',
        //      'email' => 'required|email|max:255',
        //      'feedback' => 'required|string',
        //      'review' => 'required|integer|min:1|max:5',  // Validate star rating
        //  ]);

         Feedback::create([
            //  'apponitId	' => $request->appoint_id,
             'apponitId' => $request->apponitId,
             'name' => $request->name,
             'userId' => $request->userId,
             'email' => $request->email,
             'feedback' => $request->feedback,
             'review' => $request->review,  // Save star rating
         ]);


         return redirect()->route('reviews.index')->with('success', 'Review submitted successfully!');
     }
     public function edit($id)
     {
         $review = Feedback::findOrFail($id);
         return view('admin.feedback', compact('review'));
     }

     // Update the specified review
     public function update(Request $request, $id)
     {
         $validator = Validator::make($request->all(), [
             'feedback' => 'required|string|max:255',
             'review' => 'required|string',
         ]);

         if ($validator->fails()) {
             return redirect()->back()->withErrors($validator)->withInput();
         }

         $review = Feedback::findOrFail($id);
         $review->update($request->all());
         return redirect()->route('admin.feedback')->with('success', 'Review updated successfully.');
     }

     // Remove the specified review
     public function destroy($id)
     {
         $review = Feedback::findOrFail($id);
         $review->delete();
         return redirect()->route('showFeedbacks')->with('success', 'Review deleted successfully.');
     }
}
