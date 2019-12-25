<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use App\Http\Controllers\BaseController;
use App\Http\Requests\ProductRequest;

class ProductController extends BaseController
{
    public function index()
    {
        $products = Product::all();
        return $this->sendResponse($products,"LIST OF PRODUCTS SUCCESSFULLY RETRIEVED",200);
    }

    public function store(ProductRequest $request)
    {
        $product = Product::create($request->all());
        return $this->sendResponse($product,"CREATED CLIENT",201);
    }

    public function show(Product $product)
    {
        return $this->sendResponse($product,"RETRIEVED PRODUCT",200);
    }

    public function update(ProductRequest $request, Product $product)
    {
        $product->update($request->all());
        return $this->sendResponse($product,"UPDATED PRODUCT",201);
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return $this->sendResponse($product,"DELETED PRODUCT",200);
    }
}
