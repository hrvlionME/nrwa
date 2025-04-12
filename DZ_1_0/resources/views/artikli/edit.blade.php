@extends('layouts.app')

@section('content')
    <h1>Uredi artikal: {{ $artikal->naziv }}</h1>

    <form action="{{ route('artikli.update', $artikal) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Naziv:</label>
        <input type="text" name="naziv" value="{{ $artikal->naziv }}" required><br>

        <label>Cijena:</label>
        <input type="number" name="cijena" step="0.01" value="{{ $artikal->cijena }}" required><br>

        <label>X:</label>
        <input type="number" name="x" value="{{ $artikal->x }}" required><br>

        <label>Y:</label>
        <input type="number" name="y" value="{{ $artikal->y }}" required><br>

        <label>Prodavnica:</label>
        <select name="prodavnica_id" required>
            @foreach($prodavnice as $prodavnica)
                <option value="{{ $prodavnica->id }}" {{ $artikal->prodavnica_id == $prodavnica->id ? 'selected' : '' }}>
                    {{ $prodavnica->naziv }}
                </option>
            @endforeach
        </select><br>

        <button type="submit">Spremi promjene</button>
    </form>
@endsection
