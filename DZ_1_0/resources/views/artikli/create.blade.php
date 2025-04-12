@extends('layouts.app')

@section('content')
    <h1>Dodaj novi artikal</h1>

    <form action="{{ route('artikli.store') }}" method="POST">
        @csrf

        <label>Naziv:</label>
        <input type="text" name="naziv" required><br>

        <label>Cijena:</label>
        <input type="number" name="cijena" step="0.01" required><br>

        <label>X:</label>
        <input type="number" name="x" required><br>

        <label>Y:</label>
        <input type="number" name="y" required><br>

        <label>Prodavnica:</label>
        <select name="prodavnica_id" required>
            @foreach($prodavnice as $prodavnica)
                <option value="{{ $prodavnica->id }}">{{ $prodavnica->naziv }}</option>
            @endforeach
        </select><br>

        <button type="submit">Spremi</button>
    </form>
@endsection
