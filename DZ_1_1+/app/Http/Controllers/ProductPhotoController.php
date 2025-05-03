<?php

namespace App\Http\Controllers;

use App\Models\ProductPhoto;
use Illuminate\Http\Request;

class ProductPhotoController extends Controller
{
    public function index()
    {
        $productphotos = ProductPhoto::all();
        return view('productphoto.index', compact('productphotos'));
    }

    public function create()
    {
        return view('productphoto.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'url' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        ProductPhoto::create($validated);

        return redirect()->route('productphoto.index')->with('success', 'Slika dodana.');
    }

    public function show(ProductPhoto $productphoto)
    {
        return view('productphoto.show', compact('productphoto'));
    }

    public function edit(ProductPhoto $productphoto)
    {
        return view('productphoto.edit', compact('productphoto'));
    }

    public function update(Request $request, ProductPhoto $productphoto)
    {
        $validated = $request->validate([
            'url' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $productphoto->update($validated);

        return redirect()->route('productphoto.index')->with('success', 'Slika ažurirana.');
    }

    public function destroy(ProductPhoto $productphoto)
    {
        $productphoto->delete();

        return redirect()->route('productphoto.index')->with('success', 'Slika obrisana.');
    }

    public function image($id)
    {
        $photo = \App\Models\ProductPhoto::findOrFail($id);

        if (!$photo->LargePhoto) {
            abort(404);
        }

        return response($photo->LargePhoto)
                ->header('Content-Type', 'image/gif'); // ili image/jpeg ili image/png ako je potrebno
    }

}
