@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Edit Location</h2>
    @include('locations.partials.form', ['location' => $location, 'route' => route('locations.update', $location), 'method' => 'PUT'])
</div>
@endsection
