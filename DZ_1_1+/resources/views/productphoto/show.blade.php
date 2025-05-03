@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Prikaz slike</h1>

    <p><strong>ID:</strong> {{ $productphoto->ProductPhotoID }}</p>

    {{-- Thumbnail prikaz (ako želiš možeš maknuti) --}}
    @if($productphoto->ThumbNailPhoto)
        <p><strong>Thumbnail:</strong></p>
        <img src="{{ route('productphoto.image', $productphoto->ProductPhotoID) }}?type=thumb" alt="Thumbnail slika" style="max-width: 200px;">
    @endif

    {{-- Velika slika prikaz --}}
    @if($productphoto->LargePhoto)
        <p><strong>Velika slika:</strong></p>
        <img src="{{ route('productphoto.image', $productphoto->ProductPhotoID) }}" alt="Velika slika" style="max-width: 600px;">
    @endif

    <p><strong>File ime thumb:</strong> {{ $productphoto->ThumbnailPhotoFileName }}</p>
    <p><strong>File ime large:</strong> {{ $productphoto->LargePhotoFileName }}</p>

    <p><strong>Datum izmjene:</strong> {{ $productphoto->ModifiedDate }}</p>

    <a href="{{ route('productphoto.index') }}" class="btn btn-secondary">Natrag</a>
</div>
@endsection
