<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


//importing the model  b
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function index(){
        return view('products.index');
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
}
