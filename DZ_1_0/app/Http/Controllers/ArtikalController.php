<?php

namespace App\Http\Controllers;

use App\Models\Artikal;
use App\Models\Prodavnica;
use Illuminate\Http\Request;

class ArtikalController extends Controller
{
    // Show all artikli
    public function index()
    {
        $artikli = Artikal::with('prodavnica')->get(); // eager load prodavnica
        return view('artikli.index', compact('artikli'));
    }

    // Show form to create a new artikal
    public function create()
    {
        $prodavnice = Prodavnica::all(); // for dropdown
        return view('artikli.create', compact('prodavnice'));
    }

    // Store a new artikal
    public function store(Request $request)
    {
        $validated = $request->validate([
            'naziv' => 'required|string|max:255',
            'cijena' => 'required|numeric|min:0',
            'x' => 'required|integer|min:0',
            'y' => 'required|integer|min:0',
            'prodavnica_id' => 'required|exists:prodavnice,id',
        ]);

        Artikal::create($validated);
        return redirect()->route('artikli.index')->with('success', 'Artikal dodan!');
    }

    // Show a single artikal
    public function show(Artikal $artikal)
    {
        return view('artikli.show', compact('artikal'));
    }

    // Show form to edit an existing artikal
    public function edit(Artikal $artikal)
    {
        $prodavnice = Prodavnica::all();
        return view('artikli.edit', compact('artikal', 'prodavnice'));
    }

    // Update an existing artikal
    public function update(Request $request, Artikal $artikal)
    {
        $validated = $request->validate([
            'naziv' => 'required|string|max:255',
            'cijena' => 'required|numeric|min:0',
            'x' => 'required|integer|min:0',
            'y' => 'required|integer|min:0',
            'prodavnica_id' => 'required|exists:prodavnice,id',
        ]);

        $artikal->update($validated);
        return redirect()->route('artikli.index')->with('success', 'Artikal ažuriran!');
    }

    // Delete an artikal
    public function destroy(Artikal $artikal)
    {
        $artikal->delete();
        return redirect()->route('artikli.index')->with('success', 'Artikal obrisan!');
    }
}