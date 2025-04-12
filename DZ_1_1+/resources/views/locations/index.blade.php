@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Locations</h2>
    <a href="{{ route('locations.create') }}" class="btn btn-primary mb-3">Add New Location</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Cost Rate</th>
                <th>Availability</th>
                <th>Modified Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($locations as $location)
                <tr>
                    <td>{{ $location->LocationID }}</td>
                    <td>{{ $location->Name }}</td>
                    <td>{{ $location->CostRate }}</td>
                    <td>{{ $location->Availability }}</td>
                    <td>{{ $location->ModifiedDate }}</td>
                    <td>
                        <a href="{{ route('locations.show', $location) }}" class="btn btn-sm btn-info">View</a>
                        <a href="{{ route('locations.edit', $location) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('locations.destroy', $location) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this location?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- Use the custom pagination view if you want --}}
    {{ $locations->links('vendor.pagination.custom') }}
</div>
@endsection
