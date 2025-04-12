<form action="{{ $route }}" method="POST">
    @csrf
    @if($method !== 'POST')
        @method($method)
    @endif

    <div class="row">
        <div class="col-md-6 mb-3">
            <label>Login ID</label>
            <input type="text" name="LoginID" class="form-control" value="{{ old('LoginID', $employee->LoginID) }}" required>
        </div>

        <div class="col-md-6 mb-3">
            <label>Title</label>
            <input type="text" name="Title" class="form-control" value="{{ old('Title', $employee->Title) }}" required>
        </div>

        <div class="col-md-4 mb-3">
            <label>Birth Date</label>
            <input type="date" name="BirthDate" class="form-control" value="{{ old('BirthDate', $employee->BirthDate ? \Illuminate\Support\Carbon::parse($employee->BirthDate)->format('Y-m-d') : '') }}" required>
        </div>

        <div class="col-md-4 mb-3">
            <label>Hire Date</label>
            <input type="date" name="HireDate" class="form-control" value="{{ old('HireDate', $employee->HireDate ? \Illuminate\Support\Carbon::parse($employee->HireDate)->format('Y-m-d') : '') }}" required>
        </div>

        <div class="col-md-4 mb-3">
            <label>Gender</label>
            <select name="Gender" class="form-control">
                <option value="M" {{ old('Gender', $employee->Gender) == 'M' ? 'selected' : '' }}>Male</option>
                <option value="F" {{ old('Gender', $employee->Gender) == 'F' ? 'selected' : '' }}>Female</option>
            </select>
        </div>

        <div class="col-md-3 mb-3">
            <label>Marital Status</label>
            <select name="MaritalStatus" class="form-control">
                <option value="S" {{ old('MaritalStatus', $employee->MaritalStatus) == 'S' ? 'selected' : '' }}>Single</option>
                <option value="M" {{ old('MaritalStatus', $employee->MaritalStatus) == 'M' ? 'selected' : '' }}>Married</option>
            </select>
        </div>

        <div class="col-md-3 mb-3">
            <label>Vacation Hours</label>
            <input type="number" name="VacationHours" class="form-control" value="{{ old('VacationHours', $employee->VacationHours) }}">
        </div>

        <div class="col-md-3 mb-3">
            <label>Sick Leave Hours</label>
            <input type="number" name="SickLeaveHours" class="form-control" value="{{ old('SickLeaveHours', $employee->SickLeaveHours) }}">
        </div>

        <div class="col-md-3 mb-3">
            <label>Salaried?</label>
            <select name="SalariedFlag" class="form-control">
                <option value="1" {{ old('SalariedFlag', $employee->SalariedFlag) == '1' ? 'selected' : '' }}>Yes</option>
                <option value="0" {{ old('SalariedFlag', $employee->SalariedFlag) == '0' ? 'selected' : '' }}>No</option>
            </select>
        </div>
    </div>

    <button type="submit" class="btn btn-success mt-2">Save</button>
    <a href="{{ route('employees.index') }}" class="btn btn-secondary mt-2">Cancel</a>
</form>
