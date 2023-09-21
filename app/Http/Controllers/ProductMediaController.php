<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductMediaRequest;
use App\Models\Product;
use App\Models\ProductMedia;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;

class ProductMediaController extends Controller
{
    public function upload(Product $product,ProductMediaRequest $request)
    {
        foreach ($request->file('images') as $image) {
            $path = $image->store('products/' . $product->slug,'public');
            $product->media()->create([
                'image' => $path,
            ]);
        }
        Toast::success('Product media uploaded successfully!');
        return redirect()->route('dashboard.product.show', $product->slug);
    }
    public function delete(ProductMedia $image)
    {
         unlink(public_path('storage/' . $image->image));
        $image->delete();
        Toast::success('Product media deleted successfully!');
        return redirect()->back();
    }
}
