<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Model\ProductModel;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $model;

    /**
     * Class constructor.
     */
    public function __construct(ProductModel $productModel)
    {
        $this->model = $productModel;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $products = $this->model->getAll($request);
        return view('pages.produk.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.produk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $this->model->create($request);
        return redirect()->route('product.index')->with('success', 'Produk berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $product = $this->model->findBySlug($slug);
        return view('pages.produk.edit', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $product = $this->model->findBySlug($slug);
        return view('pages.produk.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->model->update($request, $id);
        return redirect()->route('product.index')->with('success', 'Produk berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->model->delete($id);
        return redirect()->route('product.index')->with('success', 'Produk berhasil dihapus');
    }
}