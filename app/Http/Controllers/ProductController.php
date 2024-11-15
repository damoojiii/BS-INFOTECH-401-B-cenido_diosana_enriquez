<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::all();
        return view('product/index',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'product_name' => 'required|string|max:255|',
            'img_path' => 'required|image|mimes:jpeg,png,jpg,gif|max:10048',
            'description' => 'required|string|max:255',
            'quantity' => 'required|integer|min:1',
            'price' => 'required|integer|min:1',
        ]);
    
        if ($request->hasFile('img_path')) {
            $imagePath = $request->file('img_path')->store('assets/images', 'public');
            $validate['img_path'] = $imagePath;
        } else {
            return back()->withErrors(['img_path' => 'Image upload failed. Please try again.']);
        }

        try {
            Product::create($validate);
        } catch (\Exception $e) {
            return back()->withErrors(['database' => 'Failed to save product. Error: ' . $e->getMessage()]);
        }

        return redirect()->route('product.index')->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findOrFail($id);
        return view('product.show', compact('product'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
