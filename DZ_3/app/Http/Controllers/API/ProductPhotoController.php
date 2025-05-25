<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductPhoto;

class ProductPhotoController extends Controller
{
    /**
     * @group Product Photos
     * Dohvati sve fotografije proizvoda
     *
     * Vraća paginirani popis fotografija proizvoda (10 po stranici).
     *
     * @response 200 {
     *   "current_page": 1,
     *   "data": [
     *     {
     *       "id": 1,
     *       "url": "photos/photo1.jpg",
     *       "description": "Front view"
     *     }
     *   ],
     *   "total": 15,
     *   ...
     * }
     */
    public function index()
    {
        return response()->json(ProductPhoto::paginate(10)->toArray(), 200, [], JSON_INVALID_UTF8_IGNORE);
    }

    /**
     * @group Product Photos
     * Dohvati jednu fotografiju proizvoda
     *
     * Dohvaća jednu fotografiju po ID-u.
     *
     * @urlParam productPhoto int required ID fotografije. Example: 1
     *
     * @response 200 {
     *   "id": 1,
     *   "url": "photos/photo1.jpg",
     *   "description": "Front view"
     * }
     */
    public function show(ProductPhoto $productPhoto)
    {
        return response()->json($productPhoto->toArray(), 200, [], JSON_INVALID_UTF8_IGNORE);
    }

    /**
     * @group Product Photos
     * Dodaj novu fotografiju proizvoda
     *
     * Kreira novu fotografiju s podacima o URL-u i opisu.
     *
     * @bodyParam url string required Putanja slike. Example: photos/photo1.jpg
     * @bodyParam description string Opis slike. Example: Slika sprijeda
     *
     * @response 201 {
     *   "id": 2,
     *   "url": "photos/photo1.jpg",
     *   "description": "Front view"
     * }
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'url' => 'required|string',
            'description' => 'nullable|string',
        ]);

        $photo = ProductPhoto::create($data);

        return response()->json($photo->toArray(), 201, [], JSON_INVALID_UTF8_IGNORE);
    }

    /**
     * @group Product Photos
     * Ažuriraj fotografiju proizvoda
     *
     * Ažurira postojeću fotografiju.
     *
     * @urlParam productPhoto int required ID fotografije. Example: 1
     *
     * @bodyParam url string required Putanja slike. Example: photos/photo1.jpg
     * @bodyParam description string Opis slike. Example: Slika sprijeda
     *
     * @response 200 {
     *   "id": 1,
     *   "url": "photos/photo1.jpg",
     *   "description": "Front view"
     * }
     */
    public function update(Request $request, ProductPhoto $productPhoto)
    {
        $data = $request->validate([
            'url' => 'required|string',
            'description' => 'nullable|string',
        ]);

        $productPhoto->update($data);

        return response()->json($productPhoto->toArray(), 200, [], JSON_INVALID_UTF8_IGNORE);
    }

    /**
     * @group Product Photos
     * Obriši fotografiju proizvoda
     *
     * Briše fotografiju po ID-u.
     *
     * @urlParam productPhoto int required ID fotografije. Example: 1
     *
     * @response 200 {
     *   "message": "Product photo deleted successfully."
     * }
     */
    public function destroy(ProductPhoto $productPhoto)
    {
        $productPhoto->delete();
        return response()->json(['message' => 'Product photo deleted successfully.']);
    }

    /**
     * @group Product Photos
     * Prikaži stvarnu sliku
     *
     * Vraća binarni sadržaj slike iz `storage/app/public/...`.
     *
     * @urlParam id int required ID fotografije. Example: 1
     *
     * @response binary Image file
     */
    public function image($id)
    {
        $photo = ProductPhoto::findOrFail($id);
        return response()->file(storage_path('app/public/' . $photo->url));
    }

    /**
     * @group Product Photos
     * Dohvati info o slici (prikazi)
     *
     * Vraća samo `url` i `description` za sliku.
     *
     * @urlParam id int required ID fotografije. Example: 1
     *
     * @response 200 {
     *   "url": "photos/photo1.jpg",
     *   "description": "Front view"
     * }
     */
    public function prikazi($id)
    {
        $photo = ProductPhoto::findOrFail($id);
        return response()->json([
            'url' => $photo->url,
            'description' => $photo->description,
        ]);
    }
}
