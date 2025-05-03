@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Product Photos</h2>
    <a href="{{ route('productphoto.create') }}" class="btn btn-primary mb-3">Add New Product Photo</a>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Product ID</th>
                <th>Photo</th>
                <th>Primary</th>
                <th>Modified Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productphotos as $photo)
                <tr>
                    <td>{{ $photo->ProductPhotoID }}</td>
                    <td>{{ $photo->ProductID }}</td>
                    <td>
                        @if($photo->LargePhoto)
                            <img src="{{ asset('storage/photos/' . $photo->LargePhoto) }}" alt="Photo" style="width: 100px;">
                        @else
                            No Photo
                        @endif
                    </td>
                    <td>{{ $photo->Primary ? 'Yes' : 'No' }}</td>
                    <td>{{ $photo->ModifiedDate }}</td>
                    <td>
                        <a href="{{ route('productphoto.show', ['productphoto' => $photo->ProductPhotoID]) }}" class="btn btn-sm btn-info">View</a>
                        <a href="{{ route('productphoto.edit', ['productphoto' => $photo->ProductPhotoID]) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('productphoto.destroy', ['productphoto' => $photo->ProductPhotoID]) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this photo?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $productphotos->links('vendor.pagination.custom') }}
</div>
@endsection
