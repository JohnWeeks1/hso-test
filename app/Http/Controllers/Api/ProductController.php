<?php

namespace App\Http\Controllers\Api;

use App\Product;
use App\Http\Controllers\Controller;
use App\Http\Resources\Product\ProductShow;
use App\Http\Resources\Product\ProductCollection;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return ProductCollection
     */
    public function index()
    {
        return new ProductCollection(Product::all());
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return ProductShow
     */
    public function show(int $id)
    {
        return new ProductShow(Product::findOrFail($id));
    }
}
