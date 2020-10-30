<?php

namespace App\Http\Controllers;

use App\Models\Model\ProductModel;
use App\Statics\Product;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;

class GeneralApiController extends Controller
{
    use Product;

    private $product;

    /**
     * Class constructor.
     */
    public function __construct(ProductModel $productModel)
    {
        $this->product = $productModel;
    }

    public function show($slug)
    {
        if ($this->findProduct($slug)) {
            return $this->findProduct($slug);
        }

        return response()->json([
            'message' => 'Not found request',
        ], 404);
    }

    public function showProduct($slug)
    {
        $product = $this->product->findBySlug($slug);
        if($product){
            return response()->json($product, 200);
        }
        return response()->json([
            'message' => 'Request not found',
        ], 404);
    }

    public function showProductImage($imageName)
    {
        $path = storage_path('app/public/image/product/' . $imageName);
        if (!File::exists($path)) {
            abort(404);
        }

        $file = File::get($path);
        $type = File::mimeType($path);
        $response = Response::make($file, 200);
        $response->header("Content-Type", $type);
        return $response;
    }
}