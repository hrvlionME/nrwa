@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Add New Location</h2>
    @include('locations.partials.form', ['location' => new \App\Models\Location, 'route' => route('locations.store'), 'method' => 'POST'])
</div>
@endsection
