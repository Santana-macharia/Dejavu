<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{

    public function index()
    {
        $products = Products::all();
        return view('products', ['products' => $products]);
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'date_created' => 'required',
            'username' => 'required',
            'product' => 'required',
            'current_quantity' => 'required|numeric',
            'transfered_qty' => 'required|numeric',
            'department' => 'required',
        ]);

        $product = new Products;
        $product->date_created = $validatedData['date_created'];
        $product->username = $validatedData['username'];
        $product->product_name = $validatedData['product'];
        $product->current_quantity = $validatedData['current_quantity'];
        $product->transfer_quantity = $validatedData['transfered_qty'];
        $product->department_name = $validatedData['department'];
        $product->save();

        return redirect()->back()->with('success', 'Product added successfully!');
    }
}
