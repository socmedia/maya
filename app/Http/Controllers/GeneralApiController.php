<?php

namespace App\Http\Controllers;

use App\Statics\Product;
use Illuminate\Http\Request;

class GeneralApiController extends Controller
{
    use Product;

    public function show($slug)
    {
        if ($this->findProduct($slug)) return $this->findProduct($slug);
        return response()->json([
            'message' => 'Not found request',
        ], 404);
    }
}
