<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


//importing the model  b
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function index() {
        $products = Product::all(); // Fetching all products from the database
        return view('products.index', compact('products')); // Passing $products to the view
    }
    

    public function create(){
        return view('products.create');
    }

    public function store(Request $request){
        //dump data for debug puropose to see if data is coming or not coming it shows the gathered data
        // dd($request);
        $data = $request->validate([

            'pname' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|numeric|min:0',

            'description' => 'required'
        ]);

        $newProduct = Product::create($data);
        return redirect()->route('products.index');
    }



//taking the edit function into consideration using id as a parameter to be updated 
    public function edit($id) {
        //findingg if the product is available or not
        $product = Product::find($id); // Retrieve the specific product by its ID
        //if not availabel redirct user to product page with error named error neot coutnd 
        if (!$product) {
            return redirect('/product')->with('error', 'Product not found.');
        }
        // passing the control to the edit of product to show view to the product to sow what 
        //prroduct detail was what will be the new product by giving tehem their orwn forn
        return view('products.edit', compact('product')); // Pass product data to the view
    }
    

    // this is update funciton for actually validaing the data if the datais invalid or not
    public function update(Request $request, $id) {
        // Validate request parameters
        $request->validate([
            'pname' => 'required|string|max:255',
            'qty' => 'required|integer|min:0',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string',
        ]);
    
        // Find the product by ID
        $product = Product::find($id);
    
        // If product not found, redirect back with an error message
        if (!$product) {
            return redirect('/product')->with('error', 'Product not found.');
        }
    
        // Update product details with validated data
        $product->update([
            'pname' => $request->pname,
            'qty' => $request->qty,
            'price' => $request->price,
            'description' => $request->description,
        ]);
    
        // Redirect to product page with a success message
        return redirect('/product')->with('success', 'Product updated successfully.');
    }

    // the code for deletiing a record from a database 
    public function destroy($id)
    {
        // Find the product by ID
        $product = Product::find($id);

        // If product not found, redirect with an error message
        if (!$product) {
            return redirect('/product')->with('error', 'Product not found.');
        }

        // Delete the product
        $product->delete();

        // Redirect back with success message
        return redirect('/product')->with('success', 'Product deleted successfully.');
    }
    



}
