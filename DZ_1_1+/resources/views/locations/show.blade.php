@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Location Details</h2>
    <ul class="list-group">
        <li class="list-group-item"><strong>ID:</strong> {{ $location->LocationID }}</li>
        <li class="list-group-item"><strong>Name:</strong> {{ $location->Name }}</li>
        <li class="list-group-item"><strong>Cost Rate:</strong> {{ $location->CostRate }}</li>
        <li class="list-group-item"><strong>Availability:</strong> {{ $location->Availability }}</li>
        <li class="list-group-item"><strong>Modified Date:</strong> {{ $location->ModifiedDate }}</li>
    </ul>
    <a href="{{ route('locations.index') }}" class="btn btn-secondary mt-3">Back</a>
</div>
@endsection
