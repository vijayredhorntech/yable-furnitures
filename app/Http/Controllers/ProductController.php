<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\SpladeTable;

class ProductController extends Controller
{
    public function index()
    {
        $products = SpladeTable::for(Product::class)
            ->column('name')
            ->column('category_id','Category')
            ->column('summary')
            ->column('actions')
            ->paginate();
        return view('dashboard.product.index')->with('products', $products);
    }

    public function create()
    {
        $details = [
            'url' => route('dashboard.product.store'),
            'method' => 'POST',
            'title' => 'Create New Product',
            'type' => 'create'
        ];
        return view('dashboard.product.form')->with('details', $details);
    }

    public function store(ProductRequest $request)
    {
        $product = Product::create([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'summary' => $request->summary,
            'description' => $request->description,
            'status' => $request->status,
            'featured' => $request->featured,
        ]);
        Toast::success('Product created successfully!');
        return redirect()->route('dashboard.product.show',$product)->with('product', $product);
    }

    public function show(Product $product)
    {
        $variations = SpladeTable::for($product->variation())
            ->column('name')
            ->column('price')
            ->column('discount')
            ->column('images')
            ->column('actions')
            ->paginate();
        return view('dashboard.product.show')->with('product', $product)->with('variations', $variations);
    }

    public function edit(Product $product)
    {
        $details = [
            'url' => route('dashboard.product.update', $product->slug),
            'method' => 'PUT',
            'title' => 'Update Basic Product Details',
            'type' => 'edit'
        ];
        $defaults = [
            'name' => $product->name,
            'category_id' => $product->category_id,
            'summary' => $product->summary,
            'description' => $product->description,
            'status' => $product->status,
            'featured' => $product->featured,
        ];
        return view('dashboard.product.form')->with(['details' => $details, 'product' => $product,'defaults' => $defaults]);
    }
    public function update(ProductRequest $request, Product $product)
    {
        $product->update([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'summary' => $request->summary,
            'description' => $request->description,
            'status' => $request->status,
            'featured' => $request->featured,
        ]);
        Toast::success('Product updated successfully!');
        return redirect()->route('dashboard.product.show', $product->slug);
    }

    public function delete(Product $product)
    {
        $product->delete();
        Toast::success('Product deleted successfully!');
        return redirect()->route('dashboard.product.index');
    }
}
