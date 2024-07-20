<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('admin.index', compact(['products', 'categories']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createProduct()
    {
        $categories = Category::all();
        return view('admin.product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeProduct(Request $request)
    {
        // Store image in public/images directory
        $imagePath = $request->file('poster')->store('images', 'public');

        $product = new Product();
        $product->label = $request->label;
        $product->description = $request->description;
        $product->price = (float) $request->price;
        $product->quantity = $request->quantity;
        $product->poster = $imagePath; // Use the actual path of the uploaded image
        $product->category_id = $request->category_id;
        $product->save();


        if ($product) {
            return redirect()->intended('/admin')->with('product.store.success', 'Product ' . $product->id . ' is created successfully!');
        } else {
            return redirect()->intended('/admin')->with('product.store.error', 'Error, Product couldn\'t be created!');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editProduct($product_id)
    {
        $product = Product::find($product_id);
        $categories = Category::all();
        return view('admin.product.edit', compact(['product', 'categories']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateProduct(Request $request, $product_id)
    {
        $product = Product::findOrFail($product_id);

        // Determine if a new poster has been uploaded
        if ($request->hasFile('poster')) {
            // Store new poster and update 'poster' field
            $newPosterPath = $request->file('poster')->store('images', 'public');
            $product->poster = $newPosterPath;
        }

        // Update other product fields
        $product->label = $request->label;
        $product->description = $request->description;
        $product->price = (float) $request->price;
        $product->quantity = $request->quantity;
        $product->category_id = $request->category_id;

        // Save changes to the product
        $product->save();

        return redirect()->intended('/admin')->with('product.update.success', 'Product updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyProduct(int $product_id)
    {
        $product = Product::find($product_id);

        if ($product) {
            $product->delete();
            return redirect()->intended('/admin')->with('product.destroy.success', 'product ' . $product_id . ' deleted successfully!');
        } else {
            return redirect()->intended('/admin')->with('product.destroy.error', 'Error, product ' . $product_id . ' not found or couldn\'t be deleted!');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createCategory()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeCategory(Request $request)
    {
        $category = Category::create([
            'label' => $request->label,
        ]);

        if ($category) {
            return redirect()->intended('/admin')->with('product.store.success', 'Category ' . $category->id . ' is created successfully!');
        } else {
            return redirect()->intended('/admin')->with('product.store.error', 'Error, Category couldn\'t be created!');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editCategory($category_id)
    {
        $category = Category::find($category_id);
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateCategory(Request $request, $category_id)
    {
        $affectedCategories = Category::where('id', $category_id)->update([
            'label' => $request->label,
        ]);
        if ($affectedCategories === 1) {
            return redirect()->intended('/admin')->with('category.update.success', 'category updated successfuly!');
        } else {
            return redirect()->intended('/admin')->with('category.update.error', 'Error, category not found or couldn\'t be updated!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyCategory(int $category_id)
    {
        $category = Category::find($category_id);

        if ($category) {
            $category->delete();
            return redirect()->intended('/admin')->with('category.destroy.success', 'Category ' . $category_id . ' deleted successfully!');
        } else {
            return redirect()->intended('/admin')->with('category.destroy.error', 'Error, Category ' . $category_id . ' not found or couldn\'t be deleted!');
        }
    }
}
