<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Location;

class LocationController extends Controller
{
    /**
     * @group Locations
     * Dohvati sve lokacije
     *
     * Vraća paginirani popis lokacija (10 po stranici).
     *
     * @response 200 {
     *   "current_page": 1,
     *   "data": [
     *     {
     *       "id": 1,
     *       "Name": "Warehouse 1",
     *       "City": "Zagreb",
     *       ...
     *     }
     *   ],
     *   "total": 15,
     *   ...
     * }
     */
    public function index()
    {
        return response()->json(Location::paginate(10)->toArray(), 200, [], JSON_INVALID_UTF8_IGNORE);
    }

    /**
     * @group Locations
     * Dohvati jednu lokaciju
     *
     * Vraća podatke o pojedinoj lokaciji po ID-u.
     *
     * @urlParam location int required ID lokacije. Example: 1
     *
     * @response 200 {
     *   "id": 1,
     *   "Name": "Warehouse 1",
     *   "City": "Zagreb",
     *   ...
     * }
     */
    public function show(Location $location)
    {
        return response()->json($location->toArray(), 200, [], JSON_INVALID_UTF8_IGNORE);
    }

    /**
     * @group Locations
     * Dodaj novu lokaciju
     *
     * Stvara novu lokaciju s danim podacima.
     *
     * @bodyParam Name string required Naziv lokacije. Example: Warehouse 1
     * @bodyParam Address string required Adresa. Example: Industrijska 12
     * @bodyParam City string required Grad. Example: Zagreb
     * @bodyParam Country string required Država. Example: Hrvatska
     *
     * @response 201 {
     *   "id": 16,
     *   "Name": "Warehouse 1",
     *   "City": "Zagreb",
     *   ...
     * }
     */
    public function store(Request $request)
    {
        $location = Location::create($request->all());
        return response()->json($location->toArray(), 201, [], JSON_INVALID_UTF8_IGNORE);
    }

    /**
     * @group Locations
     * Ažuriraj lokaciju
     *
     * Ažurira postojeću lokaciju po ID-u.
     *
     * @urlParam location int required ID lokacije. Example: 1
     *
     * @bodyParam Name string required Naziv lokacije. Example: Warehouse 1
     * @bodyParam Address string required Adresa. Example: Industrijska 12
     * @bodyParam City string required Grad. Example: Zagreb
     * @bodyParam Country string required Država. Example: Hrvatska
     *
     * @response 200 {
     *   "id": 1,
     *   "Name": "Warehouse 1",
     *   "City": "Zagreb",
     *   ...
     * }
     */
    public function update(Request $request, Location $location)
    {
        $location->update($request->all());
        return response()->json($location->toArray(), 200, [], JSON_INVALID_UTF8_IGNORE);
    }

    /**
     * @group Locations
     * Obriši lokaciju
     *
     * Briše lokaciju po ID-u.
     *
     * @urlParam location int required ID lokacije. Example: 1
     *
     * @response 200 {
     *   "message": "Location deleted successfully."
     * }
     */
    public function destroy(Location $location)
    {
        $location->delete();
        return response()->json(['message' => 'Location deleted successfully.']);
    }
}
