<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;
use Flasher\Toastr\Prime\ToastrInterface;

class InventoryController extends Controller
{
    // Method to display the product creation form
    public function create()
    {
        return view('admin.inventoryCreate'); // Ensure this path is correct
    }

    // Method to handle form submission and store product data
    public function store(Request $request)
    {
        // Validate incoming request data
        $request->validate([
            'productName' => 'required|string|max:255',
            'productDescription' => 'required|string',
            'stock' => 'required|integer',
            'productImage' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'productPrice' => 'required|numeric',
            'productStatus' => 'required|boolean',
            'productExpiry' => 'nullable|date',
        ]);

        $fileName = time() . '.' . $request->productImage->extension();
        $request->productImage->move(public_path('uploads'), $fileName);

        // Create the new inventory item
        Inventory::create([
            'productName' => $request->productName,
            'productDescription' => $request->productDescription,
            'stock' => $request->stock,
            'productImage' => $fileName, // Store the filename (without the full path)
            'productPrice' => $request->productPrice,
            'productStatus' => $request->productStatus,
            'productExpiry' => $request->productExpiry,
        ]);

        // Redirect with a success message
        return redirect()->route('admin.products.index');
    }


    // Method to display all inventory products
    public function index()
    {
        $products = Inventory::all(); // Retrieve all products from the Inventory model
        return view('admin.inventory', ['data' => $products]); // Pass products to the view
    }

    public function destroy($id)
{
    $product = Inventory::findOrFail($id);
    $product->delete();

    return redirect()->route('admin.products.index')->with('success', 'Product deleted successfully.');
}
// Method to show the edit form
public function editInventory($id)
{
    $inventory = Inventory::find($id);

    if (!$inventory) {
        return redirect()->route( 'admin.inventory')->with('error', 'Inventory item not found.');
    }

    return view('admin.inventoryEdit', compact('inventory'));
}

// Method to update inventory details
public function updateInventory(Request $request, $id)
{
    $inventory = Inventory::find($id);

    if (!$inventory) {
        return redirect()->route('admin.inventoryEdit')->with('error', 'Inventory item not found.');
    }

    // Validate input data
    $request->validate([
        'productName' => 'required|string|max:255',
        'productDescription' => 'required|string',
        'stock' => 'required|integer',
        'productImage' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'productPrice' => 'required|numeric',
        'productStatus' => 'required|boolean',
        'productExpiry' => 'nullable|date',
    ]);

    // Update inventory details
    $inventory->productName = $request->productName;
    $inventory->productDescription = $request->productDescription;
    $inventory->Stock = $request->Stock;

    if ($request->hasFile('productImage')) {
        $fileName = time() . '.' . $request->productImage->extension();
        $request->productImage->move(public_path('uploads'), $fileName);
        $inventory->productImage = 'uploads' . $fileName;
    }

    $inventory->productPrice = $request->productPrice;
    $inventory->productStatus = $request->productStatus;
    $inventory->productExpiry = $request->productExpiry;

    $inventory->save();

    return redirect()->route('admin.products.index')->with('success', 'Inventory item updated successfully.');
}


}
