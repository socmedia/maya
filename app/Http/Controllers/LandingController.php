<?php

namespace App\Http\Controllers;

use App\Models\Model\BlogModel;
use App\Models\Model\ProductModel;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    private $product;

    private $blog;

    /**
     * Class constructor.
     */
    public function __construct(
        ProductModel $productModel,
        BlogModel $blogModel
    ){
        $this->product = $productModel;
        $this->blog = $blogModel;
    }

    public function index()
    {
        $products = $this->product->getOnly(['name', 'slug_name','thumbnail']);
        $blogs = $this->blog->getBlogs(5);
        $populars = $this->blog->getPopulars(5);
        return view('landing.index', compact('products', 'blogs', 'populars'));
    }

    public function showArticle($slug)
    {
        $article = $this->blog->findBySlug($slug);
        $tags = $tags = explode(',', $article->tags);
        return view('pages.article', compact('article', 'tags'));
    }
}
