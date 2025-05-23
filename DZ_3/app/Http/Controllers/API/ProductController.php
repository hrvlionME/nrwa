<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        return response()->json(Product::paginate(10)->toArray(), 200, [], JSON_INVALID_UTF8_IGNORE);
    }

    public function show(Product $product)
    {
        return response()->json($product->toArray(), 200, [], JSON_INVALID_UTF8_IGNORE);
    }

    public function store(Request $request)
    {
        $product = Product::create($request->all());
        return response()->json($product->toArray(), 201, [], JSON_INVALID_UTF8_IGNORE);
    }

    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
        return response()->json($product->toArray(), 200, [], JSON_INVALID_UTF8_IGNORE);
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return response()->json(['message' => 'Product deleted successfully.']);
    }
}
