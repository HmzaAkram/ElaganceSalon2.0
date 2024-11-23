<?php

namespace App\Http\Controllers;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function getPrice($id)
    {
        // Fetch the service from the database
        $service = Service::find($id);

        if ($service) {
            return response()->json(['price' => $service->price]);
        }

        return response()->json(['error' => 'Service not found'], 404);
    }
    public function index()
    {
        $services = Service::all();
        return view('admin.services', ['services' => $services]);
    }
    public function userServices()
    {
        $services = Service::all();
        return view('users.pages.service', ['services' => $services]);
    }
    public function create()
    {
        return view('admin.servicesCreate');
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'description' => 'required|string',
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        //     'price' => 'required|numeric',
        // ]);

        $fileName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('uploads/services'), $fileName);

        Service::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' =>  $fileName,
            'price' => $request->price
        ]);

        return redirect()->route('admin.services.create')->with('success', 'Service added successfully');
    }

    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('admin.serviceEdit', ['service' => $service]);
    }

    public function update(Request $request, $id)
    {
        $service = Service::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'price' => 'required|numeric',
        ]);

        if ($request->hasFile('image')) {
            $fileName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/services'), $fileName);
            $service->image = 'uploads/services' . $fileName;
        }

        $service->name = $request->name;
        $service->description = $request->description;
        $service->price = $request->price;
        $service->save();

        return redirect()->route('showServices')->with('success', 'Service updated successfully');
    }

    public function destroy($id)
    {
        $service = Service::findOrFail($id);

        // Optionally, delete the image file from the public folder
        if (file_exists(public_path($service->image))) {
            unlink(public_path($service->image));
        }

        $service->delete();

        return redirect()->route('showServices')->with('success', 'Service deleted successfully');
    }
}
