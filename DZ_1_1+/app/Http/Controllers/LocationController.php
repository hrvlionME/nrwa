<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index()
    {
        $locations = Location::paginate(10);
        return view('locations.index', compact('locations'));
    }

    public function create()
    {
        return view('locations.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'Name'         => 'required|string',
            'CostRate'     => 'required|numeric',
            'Availability' => 'required|numeric',
            'ModifiedDate' => 'required|date',
        ]);

        Location::create($data);

        return redirect()->route('locations.index')->with('success', 'Location created successfully!');
    }

    public function show(Location $location)
    {
        return view('locations.show', compact('location'));
    }

    public function edit(Location $location)
    {
        return view('locations.edit', compact('location'));
    }

    public function update(Request $request, Location $location)
    {
        // Validate and update the location
        $data = $request->validate([
            'Name'         => 'required|string',
            'CostRate'     => 'required|numeric',
            'Availability' => 'required|numeric',
            'ModifiedDate' => 'required|date',
        ]);

        $location->update($data);

        return redirect()->route('locations.index')->with('success', 'Location updated successfully!');
    }

    public function destroy(Location $location)
    {
        $location->delete();

        return redirect()->route('locations.index')->with('success', 'Location deleted successfully!');
    }
}
