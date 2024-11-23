<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User; // or App\Entities\User, depending on the actual namespace


class HomeController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'mobile' => 'required|string',
            // 'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image
            'age' => 'required|integer',
            'gender' => 'required|string',
            'address' => 'required|string',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('profile_images', 'public'); // Save to 'storage/app/public/profile_images'
        }

        // Create the user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            // 'image' => $imagePath, // Save image path in the database
            'age' => $request->age,
            'gender' => $request->gender,
            'address' => $request->address,
            'password' => bcrypt($request->password),
        ]);

        // Redirect or perform other actions
        return redirect()->route('home')->with('success', 'Registration successful');
    }

    /**
     * Create a new controller instance.
     *
     * @return void


     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    // Check if the user is an admin based on their email and password
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();

        // Check if the user is an admin based on their email and password
        if ($user->role == 0 || $user->role == 1) {
            return view('admin.index');
            // Admin view
        } elseif ($user->role == 2) {
            // return view('admin.index');
            return view('users.pages.welcome');  // Regular user view
        } else {
            return view('users.pages.welcome');  // Regular user view
        }


    }


    public function edit($id)
    {
        $user = User::findOrFail($id); // Retrieve the user or show 404 if not found
        return view('admin.userEdit', compact('user')); // Ensure 'users.edit' matches your Blade file path
    }

    // Method to update an existing user
    // Handle the user update
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id); // Retrieve the user

        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'mobile' => 'required|string|max:15',
            'age' => 'required|integer|min:1',
            'gender' => 'required|string|in:Male,Female,Other',
            'address' => 'required|string|max:500',
           'role' => 'required|string|in:User,Admin,Staff',
        ]);
        $roleMap = [
            'User' => 2,
            'Admin' => 0,
            'Staff' => 1,
        ];
        // Update the user fields
        $user->name = $request->name;
        $user->email = $request->email;
        $user->mobile = $request->mobile;
        $user->age = $request->age;
        $user->gender = $request->gender;
        $user->address = $request->address;
        $user->role = $roleMap[$request->role];
        // Update password only if provided
        if ($request->filled('password')) {
            $user->password = bcrypt($request->password);
        }

        $user->save(); // Save the changes

        return redirect()->route('user.edit', $id)->with('success', 'User updated successfully.');
    }

    // Method to delete a user
    public function destroy($id)
    {
        $user = User::findOrFail($id); // Find the user by ID
        $user->delete(); // Delete the user

        // Redirect to user list with a success message
        return redirect()->route('user')->with('success', 'User deleted successfully.');
    }

    public function create()
    {
        return view('user.create'); // Return the view with the form to add a user
    }
    public function store(Request $request)
    {
        // Validate the request
        // return $request->all();
        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|string|email|max:255|unique:users',
        //     'mobile' => 'required|string|max:15',
        //     'age' => 'required|integer',
        //     'gender' => 'required|string',
        //     'password' => 'required|string|min:8|confirmed',
        //     'address' => 'required|string|max:255',
        //     'role' => 'required|string|in:User,Staff,Admin',
        // ]);

        // Create the new user
        $res = User::create(attributes: [
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'age' => $request->age,
            'gender' => $request->gender,
            'password' => $request->password,
            'address' => $request->address,
            'role' => $request->role,
        ]);
        // return $res;

        // Redirect back to the users list with a success message
        return redirect()->route('user')->with('success', 'User added successfully.');
    }

}



