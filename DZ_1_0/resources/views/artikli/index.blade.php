@extends('layouts.app')

@section('content')
<div class="container py-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="fw-bold text-primary">Popis artikala</h1>
        <a href="{{ route('artikli.create') }}" class="btn btn-success shadow-sm">Novi artikal</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success shadow-sm">
            {{ session('success') }}
        </div>
    @endif

    @forelse($artikli as $artikal)
        <div class="card mb-4 border-0 shadow rounded" style="background-color: #f8f9ff;">
            <div class="card-body">
                <h4 class="card-title text-dark-emphasis mb-3">
                    <span class="text-primary">{{ $artikal->naziv }}</span>
                </h4>

                <p class="text-muted mb-2">
                    <strong>Cijena:</strong> €{{ number_format($artikal->cijena, 2) }}<br>
                    <strong>Pozicija:</strong> ({{ $artikal->x }}, {{ $artikal->y }})<br>
                    <strong>Prodavnica:</strong> {{ $artikal->prodavnica->naziv }}
                </p>

                <div class="d-flex flex-wrap gap-2 mt-3">
                    <a href="{{ route('artikli.show', $artikal) }}" class="btn btn-outline-primary btn-sm">Prikaži</a>
                    <a href="{{ route('artikli.edit', $artikal) }}" class="btn btn-outline-warning btn-sm">Uredi</a>
                    <form action="{{ route('artikli.destroy', $artikal) }}" method="POST" onsubmit="return confirm('Jesi siguran?')" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger btn-sm">Obriši</button>
                    </form>
                </div>
            </div>
        </div>
    @empty
        <div class="alert alert-info">Nema artikala za prikaz.</div>
    @endforelse

</div>
@endsection
