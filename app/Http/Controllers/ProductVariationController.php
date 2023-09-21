<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductVariationRequest;
use App\Models\Product;
use App\Models\ProductVariation;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;

class ProductVariationController extends Controller
{
    public function store(ProductVariationRequest $request, Product $product)
    {
        $variation = $product->variation()->create([
            'name' => $request->name,
            'price' => $request->price,
            'discount' => $request->discount,
        ]);
        foreach ($request->file('images') as $image) {
            $product->media()->create([
                'image' => $image->store('products/' . $product->slug, 'public'),
                'variation_id' => $variation->id,
            ]);
        }

        Toast::success('Product variation created successfully!');
        return redirect()->back();
    }

    public function delete(ProductVariation $variation)
    {
        foreach ($variation->media as $image) {
            unlink(public_path('storage/' . $image->image));
            $image->delete();
        }
        $variation->delete();
        Toast::success('Product variation deleted successfully!');
        return redirect()->back();
    }
}
