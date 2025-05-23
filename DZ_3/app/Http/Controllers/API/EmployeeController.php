<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\Log;

class EmployeeController extends Controller
{
    // GET /api/employees
    public function index()
    {
        $employees = Employee::paginate(10)->toArray();

        return response()->json($employees, 200, [], JSON_INVALID_UTF8_IGNORE);
    }

    // GET /api/employees/{id}
    public function show(Employee $employee)
    {
        return response()->json($employee->toArray(), 200, [], JSON_INVALID_UTF8_IGNORE);
    }

    // POST /api/employees
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

    // PUT/PATCH /api/employees/{id}
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

    // DELETE /api/employees/{id}
    public function destroy(Employee $employee)
    {
        $employee->delete();

        return response()->json(['message' => 'Employee deleted successfully.']);
    }
}
