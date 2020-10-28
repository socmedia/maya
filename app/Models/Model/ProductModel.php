<?php

namespace App\Models\Model;

use App\Models\Product;
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
        $product->subject = $request->subject;
        if($request->file('image')){
            //
        }
        $product->description = $request->description;
        $product->production_price = null;
        $product->sell_price = null;
        $product->is_showed = $request->is_showed;
        return $product->save();
    }

    public function update($request, $id)
    {
        $product = Product::findOrFail($id);
        $product->name = $request->name;
        $product->slug_name = Str::slug($request->name);
        $product->subject = $request->subject;
        if($request->file('image')){
            //
        }
        $product->description = $request->description;
        $product->production_price = null;
        $product->sell_price = null;
        $product->is_showed = $request->is_showed;
        return $product->save();
    }

    public function delete($id)
    {
        $product = Product::findOrFail($id);
        return $product->delete();
    }
}