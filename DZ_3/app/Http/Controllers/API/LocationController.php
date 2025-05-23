<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Location;

class LocationController extends Controller
{
    public function index()
    {
        return response()->json(Location::paginate(10)->toArray(), 200, [], JSON_INVALID_UTF8_IGNORE);
    }

    public function show(Location $location)
    {
        return response()->json($location->toArray(), 200, [], JSON_INVALID_UTF8_IGNORE);
    }

    public function store(Request $request)
    {
        $location = Location::create($request->all());
        return response()->json($location->toArray(), 201, [], JSON_INVALID_UTF8_IGNORE);
    }

    public function update(Request $request, Location $location)
    {
        $location->update($request->all());
        return response()->json($location->toArray(), 200, [], JSON_INVALID_UTF8_IGNORE);
    }

    public function destroy(Location $location)
    {
        $location->delete();
        return response()->json(['message' => 'Location deleted successfully.']);
    }
}
