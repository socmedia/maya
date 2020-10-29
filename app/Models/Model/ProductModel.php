<?php

namespace App\Models\Model;

use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductModel
{
    public function getAll($request)
    {
        $product = Product::orderBy('created_at', 'desc');
        return $product->get();
    }

    public function findById($id)
    {
        $product = Product::findOrFail($id);
        return $product;
    }

    public function findBySlug($slug)
    {
        $product = Product::where('slug_name', $slug);
        return $product->first();
    }

    public function create($request)
    {
        $product = new Product();
        $product->id = Str::uuid()->getHex();
        $product->name = $request->name;
        $product->slug_name = Str::slug($request->name);
        if ($request->file('image')) {
            $this->uploadImage($request, $product);
        }
        $product->description = $request->description;
        $product->production_price = $request->production;
        $product->sell_price = $request->sell;
        $product->is_showed = $request->is_showed;
        return $product->save();
    }

    public function update($request, $id)
    {
        $product = Product::findOrFail($id);
        $product->name = $request->name;
        $product->slug_name = Str::slug($request->name);
        if ($request->file('image')) {
            $this->updateImage($request, $product);
        }
        $product->description = $request->description;
        $product->production_price = $request->production;
        $product->sell_price = $request->sell;
        $product->is_showed = $request->is_showed;
        return $product->save();
    }

    public function delete($id)
    {
        $product = Product::findOrFail($id);
        return $product->delete();
    }

    protected function uploadImage($request, $collection)
    {
        $name = 'prd_' . time() . '_' . random_int(100, 999) . '.' . $request->file('image')
            ->getClientOriginalExtension();
        $request->file('image')
            ->move(storage_path('app/public/image/product/'), $name);
        return $collection->image = $name;
    }

    protected function updateImage($request, $collection)
    {
        $this->deleteImage($collection->image);
        return $this->uploadImage($request, $collection);
    }

    protected function deleteImage($imageName)
    {
        $storage = Storage::disk('productImage');
        return $storage->delete($imageName);
    }
}
