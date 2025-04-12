<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::paginate(10); // paginate if too many records
        return view('employees.index', compact('employees'));
    }

    public function create()
    {
        return view('employees.create');
    }

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
            'SalariedFlag' => 'required',
            'VacationHours' => 'required|integer',
            'SickLeaveHours' => 'required|integer',
            'CurrentFlag' => 'required',
            'rowguid' => 'required',
            'ModifiedDate' => 'required|date',
        ]);

        Employee::create($data);

        return redirect()->route('employees.index')->with('success', 'Employee created successfully!');
    }

    public function show(Employee $employee)
    {
        return view('employees.show', compact('employee'));
    }

    public function edit(Employee $employee)
    {
        return view('employees.edit', compact('employee'));
    }

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
            'SalariedFlag' => 'required',
            'VacationHours' => 'required|integer',
            'SickLeaveHours' => 'required|integer',
            'CurrentFlag' => 'required',
            'rowguid' => 'required',
            'ModifiedDate' => 'required|date',
        ]);

        $employee->update($data);

        return redirect()->route('employees.index')->with('success', 'Employee updated successfully!');
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect()->route('employees.index')->with('success', 'Employee deleted successfully!');
    }
}
