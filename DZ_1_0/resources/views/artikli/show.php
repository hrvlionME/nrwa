@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="card shadow border-0 p-4">
        <h2 class="text-primary fw-bold">{{ $artikal->naziv }}</h2>

        <p class="text-muted">
            <strong>Cijena:</strong> €{{ number_format($artikal->cijena, 2) }}<br>
            <strong>Koordinata:</strong> ({{ $artikal->x }}, {{ $artikal->y }})<br>
            <strong>Prodavnica:</strong> {{ $artikal->prodavnica->naziv }}
        </p>

        <div class="d-flex flex-wrap gap-2 mt-3">
            <a href="{{ route('artikli.edit', $artikal) }}" class="btn btn-outline-warning btn-sm">Uredi</a>
            <a href="{{ route('artikli.index') }}" class="btn btn-outline-secondary btn-sm">Natrag</a>
        </div>
    </div>
</div>
@endsection
