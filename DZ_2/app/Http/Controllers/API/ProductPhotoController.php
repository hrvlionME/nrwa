<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductPhoto;

class ProductPhotoController extends Controller
{
    public function index()
    {
        return response()->json(ProductPhoto::paginate(10)->toArray(), 200, [], JSON_INVALID_UTF8_IGNORE);
    }

    public function show(ProductPhoto $productPhoto)
    {
        return response()->json($productPhoto->toArray(), 200, [], JSON_INVALID_UTF8_IGNORE);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'url' => 'required|string',
            'description' => 'nullable|string',
        ]);

        $photo = ProductPhoto::create($data);

        return response()->json($photo->toArray(), 201, [], JSON_INVALID_UTF8_IGNORE);
    }

    public function update(Request $request, ProductPhoto $productPhoto)
    {
        $data = $request->validate([
            'url' => 'required|string',
            'description' => 'nullable|string',
        ]);

        $productPhoto->update($data);

        return response()->json($productPhoto->toArray(), 200, [], JSON_INVALID_UTF8_IGNORE);
    }

    public function destroy(ProductPhoto $productPhoto)
    {
        $productPhoto->delete();
        return response()->json(['message' => 'Product photo deleted successfully.']);
    }

    // Extra routes

    public function image($id)
    {
        $photo = ProductPhoto::findOrFail($id);
        return response()->file(storage_path('app/public/' . $photo->url));
    }

    public function prikazi($id)
    {
        $photo = ProductPhoto::findOrFail($id);
        return response()->json([
            'url' => $photo->url,
            'description' => $photo->description,
        ]);
    }
}
