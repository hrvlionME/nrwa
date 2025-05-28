<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{
    /**
     * @group Employees
     * Dohvati sve zaposlenike
     *
     * Vraća paginirani popis zaposlenika (10 po stranici).
     *
     * @response 200 {
     *   "current_page": 1,
     *   "data": [
     *     {
     *       "id": 1,
     *       "NationalIDNumber": "123456789",
     *       "Title": "Manager",
     *       "BirthDate": "1980-01-01",
     *       ...
     *     }
     *   ],
     *   "total": 50,
     *   ...
     * }
     */
public function index()
{
    if (!Auth::check()) {
        return response()->json([
            'message' => 'Niste prijavljeni. Pristup zahtijeva autentifikaciju.'
        ], 401);
    }

    $employees = Employee::paginate(10)->toArray();
    return response()->json($employees, 200, [], JSON_INVALID_UTF8_IGNORE);
}

    /**
     * @group Employees
     * Dohvati jednog zaposlenika
     *
     * Dohvaća podatke o zaposleniku prema ID-u.
     *
     * @urlParam employee int required ID zaposlenika. Example: 1
     *
     * @response 200 {
     *   "id": 1,
     *   "NationalIDNumber": "123456789",
     *   "Title": "Manager",
     *   ...
     * }
     */
    public function show(Employee $employee)
    {
        return response()->json($employee->toArray(), 200, [], JSON_INVALID_UTF8_IGNORE);
    }

    /**
     * @group Employees
     * Dodaj novog zaposlenika
     *
     * Dodaje novog zaposlenika u bazu.
     *
     * @bodyParam NationalIDNumber string required Nacionalni ID. Example: 123456789
     * @bodyParam ContactID integer required ID kontakta. Example: 5
     * @bodyParam LoginID string required Prijava korisnika. Example: jdoe
     * @bodyParam ManagerID integer ID nadređenog. Example: 2
     * @bodyParam Title string required Pozicija. Example: Senior Engineer
     * @bodyParam BirthDate date required Datum rođenja. Example: 1990-05-10
     * @bodyParam MaritalStatus string required Bračni status. Example: S
     * @bodyParam Gender string required Spol. Example: M
     * @bodyParam HireDate date required Datum zaposlenja. Example: 2022-01-01
     * @bodyParam SalariedFlag boolean required Zaposlen na plaći. Example: true
     * @bodyParam VacationHours integer required Sati godišnjeg odmora. Example: 10
     * @bodyParam SickLeaveHours integer required Sati bolovanja. Example: 5
     * @bodyParam CurrentFlag boolean required Trenutno zaposlen. Example: true
     * @bodyParam rowguid string required GUID. Example: 123e4567-e89b-12d3-a456-426614174000
     * @bodyParam ModifiedDate date required Datum izmjene. Example: 2023-04-01
     *
     * @response 201 {
     *   "id": 51,
     *   "NationalIDNumber": "123456789",
     *   "Title": "Manager",
     *   ...
     * }
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'NationalIDNumber' => 'required',
            'ContactID' => 'required|integer',
            'LoginID' => 'required',
            'ManagerID' => 'nullable|integer',
            'Title' => 'required',
            'BirthDate' => 'required|date',
            'MaritalStatus' => 'required',
            'Gender' => 'required',
            'HireDate' => 'required|date',
            'SalariedFlag' => 'required|boolean',
            'VacationHours' => 'required|integer',
            'SickLeaveHours' => 'required|integer',
            'CurrentFlag' => 'required|boolean',
            'rowguid' => 'required',
            'ModifiedDate' => 'required|date',
        ]);

        $employee = Employee::create($data);

        return response()->json($employee->toArray(), 201, [], JSON_INVALID_UTF8_IGNORE);
    }

    /**
     * @group Employees
     * Ažuriraj zaposlenika
     *
     * Ažurira podatke zaposlenika po ID-u.
     *
     * @urlParam employee int required ID zaposlenika. Example: 1
     *
     * @bodyParam NationalIDNumber string required Nacionalni ID. Example: 123456789
     * @bodyParam ContactID integer required ID kontakta. Example: 5
     * @bodyParam LoginID string required Prijava korisnika. Example: jdoe
     * @bodyParam ManagerID integer ID nadređenog. Example: 2
     * @bodyParam Title string required Pozicija. Example: Senior Engineer
     * @bodyParam BirthDate date required Datum rođenja. Example: 1990-05-10
     * @bodyParam MaritalStatus string required Bračni status. Example: S
     * @bodyParam Gender string required Spol. Example: M
     * @bodyParam HireDate date required Datum zaposlenja. Example: 2022-01-01
     * @bodyParam SalariedFlag boolean required Zaposlen na plaći. Example: true
     * @bodyParam VacationHours integer required Sati godišnjeg odmora. Example: 10
     * @bodyParam SickLeaveHours integer required Sati bolovanja. Example: 5
     * @bodyParam CurrentFlag boolean required Trenutno zaposlen. Example: true
     * @bodyParam rowguid string required GUID. Example: 123e4567-e89b-12d3-a456-426614174000
     * @bodyParam ModifiedDate date required Datum izmjene. Example: 2023-04-01
     *
     * @response 200 {
     *   "id": 1,
     *   "NationalIDNumber": "123456789",
     *   "Title": "Manager",
     *   ...
     * }
     */
    public function update(Request $request, Employee $employee)
    {
        $data = $request->validate([
            'NationalIDNumber' => 'required',
            'ContactID' => 'required|integer',
            'LoginID' => 'required',
            'ManagerID' => 'nullable|integer',
            'Title' => 'required',
            'BirthDate' => 'required|date',
            'MaritalStatus' => 'required',
            'Gender' => 'required',
            'HireDate' => 'required|date',
            'SalariedFlag' => 'required|boolean',
            'VacationHours' => 'required|integer',
            'SickLeaveHours' => 'required|integer',
            'CurrentFlag' => 'required|boolean',
            'rowguid' => 'required',
            'ModifiedDate' => 'required|date',
        ]);

        $employee->update($data);

        return response()->json($employee->toArray(), 200, [], JSON_INVALID_UTF8_IGNORE);
    }

    /**
     * @group Employees
     * Obriši zaposlenika
     *
     * Briše zaposlenika po ID-u.
     *
     * @urlParam employee int required ID zaposlenika. Example: 1
     *
     * @response 200 {
     *   "message": "Employee deleted successfully."
     * }
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return response()->json(['message' => 'Employee deleted successfully.']);
    }
}
