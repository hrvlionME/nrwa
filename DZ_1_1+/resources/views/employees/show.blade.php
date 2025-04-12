@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Employee Details</h2>
    <ul class="list-group">
        <li class="list-group-item"><strong>Login ID:</strong> {{ $employee->LoginID }}</li>
        <li class="list-group-item"><strong>Title:</strong> {{ $employee->Title }}</li>
        <li class="list-group-item"><strong>Birth Date:</strong> {{ $employee->BirthDate }}</li>
        <li class="list-group-item"><strong>Hire Date:</strong> {{ $employee->HireDate }}</li>
        <li class="list-group-item"><strong>Gender:</strong> {{ $employee->Gender }}</li>
        <li class="list-group-item"><strong>Marital Status:</strong> {{ $employee->MaritalStatus }}</li>
    </ul>
    <a href="{{ route('employees.index') }}" class="btn btn-secondary mt-3">Back</a>
</div>
@endsection
