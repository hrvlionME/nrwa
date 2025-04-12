@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Add New Employee</h2>
    @include('employees.partials.form', ['employee' => new \App\Models\Employee, 'route' => route('employees.store'), 'method' => 'POST'])
</div>
@endsection
