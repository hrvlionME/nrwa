@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Edit Employee</h2>
    @include('employees.partials.form', ['employee' => $employee, 'route' => route('employees.update', $employee), 'method' => 'PUT'])
</div>
@endsection
