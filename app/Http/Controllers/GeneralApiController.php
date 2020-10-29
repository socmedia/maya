<?php

namespace App\Http\Controllers;

use App\Statics\Product;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;

class GeneralApiController extends Controller
{
    use Product;

    public function show($slug)
    {
        if ($this->findProduct($slug)) {
            return $this->findProduct($slug);
        }

        return response()->json([
            'message' => 'Not found request',
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
