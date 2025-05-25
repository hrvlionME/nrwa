<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * @group Products
     * Dohvati sve proizvode
     *
     * Vraća paginirani popis proizvoda (10 po stranici).
     *
     * @response 200 {
     *   "current_page": 1,
     *   "data": [
     *     {
     *       "id": 1,
     *       "Name": "Monitor 24\"",
     *       "Price": 120.99,
     *       ...
     *     }
     *   ],
     *   "total": 100,
     *   ...
     * }
     */
    public function index()
    {
        return response()->json(Product::paginate(10)->toArray(), 200, [], JSON_INVALID_UTF8_IGNORE);
    }

    /**
     * @group Products
     * Dohvati jedan proizvod
     *
     * Dohvaća podatke o proizvodu prema ID-u.
     *
     * @urlParam product int required ID proizvoda. Example: 1
     *
     * @response 200 {
     *   "id": 1,
     *   "Name": "Monitor 24\"",
     *   "Price": 120.99,
     *   ...
     * }
     */
    public function show(Product $product)
    {
        return response()->json($product->toArray(), 200, [], JSON_INVALID_UTF8_IGNORE);
    }

    /**
     * @group Products
     * Dodaj novi proizvod
     *
     * Stvara novi proizvod s danim podacima.
     *
     * @bodyParam Name string required Naziv proizvoda. Example: Monitor 24"
     * @bodyParam Description string Opis proizvoda. Example: LED IPS monitor
     * @bodyParam Price number required Cijena proizvoda. Example: 120.99
     * @bodyParam InStock boolean Dostupnost na skladištu. Example: true
     *
     * @response 201 {
     *   "id": 51,
     *   "Name": "Monitor 24\"",
     *   "Price": 120.99,
     *   ...
     * }
     */
    public function store(Request $request)
    {
        $product = Product::create($request->all());
        return response()->json($product->toArray(), 201, [], JSON_INVALID_UTF8_IGNORE);
    }

    /**
     * @group Products
     * Ažuriraj proizvod
     *
     * Ažurira podatke proizvoda po ID-u.
     *
     * @urlParam product int required ID proizvoda. Example: 1
     *
     * @bodyParam Name string required Naziv proizvoda. Example: Monitor 24"
     * @bodyParam Description string Opis proizvoda. Example: LED IPS monitor
     * @bodyParam Price number required Cijena proizvoda. Example: 120.99
     * @bodyParam InStock boolean Dostupnost na skladištu. Example: true
     *
     * @response 200 {
     *   "id": 1,
     *   "Name": "Monitor 24\"",
     *   "Price": 120.99,
     *   ...
     * }
     */
    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
        return response()->json($product->toArray(), 200, [], JSON_INVALID_UTF8_IGNORE);
    }

    /**
     * @group Products
     * Obriši proizvod
     *
     * Briše proizvod po ID-u.
     *
     * @urlParam product int required ID proizvoda. Example: 1
     *
     * @response 200 {
     *   "message": "Product deleted successfully."
     * }
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return response()->json(['message' => 'Product deleted successfully.']);
    }
}
