<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\Storage;
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
        $product = Product::findOrFail($id);
        return view('product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validate = $request->validate([
            'product_name' => 'required|string|max:255',
            'img_path' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10048',
            'description' => 'required|string|max:255',
            'quantity' => 'required|integer|min:1',
            'price' => 'required|integer|min:1',
        ]);
    
        $product = Product::findOrFail($id);
    
        // Update the image only if a new file is uploaded
        if ($request->hasFile('img_path')) {
            $imagePath = $request->file('img_path')->store('assets/images', 'public');
            $validate['img_path'] = $imagePath;
    
            // Optionally delete the old image
            if ($product->img_path && Storage::disk('public')->exists($product->img_path)) {
                Storage::disk('public')->delete($product->img_path);
            }
        }
    
        try {
            $product->update($validate);
        } catch (\Exception $e) {
            return back()->withErrors(['database' => 'Failed to update product. Error: ' . $e->getMessage()]);
        }

        return redirect()->route('product.index')->with('success','Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        
        if ($product->img_path && Storage::disk('public')->exists($product->img_path)) {
            Storage::disk('public')->delete($product->img_path);
        }
        try {
            $product->delete();
        } catch (\Exception $e) {
            return back()->withErrors(['database' => 'Failed to update product. Error: ' . $e->getMessage()]);
        }

        return redirect()->route('product.index')->with('success','Product deleted successfully.');
    }
}
