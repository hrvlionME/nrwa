@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Popis slika</h1>

    <a href="{{ route('productphoto.create') }}" class="btn btn-primary mb-3">Dodaj novu sliku</a>

    @if($productphotos->isEmpty())
        <p>Nema slika.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>URL</th>
                    <th>Opis</th>
                    <th>Akcije</th>
                </tr>
            </thead>
            <tbody>
                @foreach($productphotos as $photo)
                    <tr>
                        <td>{{ $photo->id }}</td>
                        <td>{{ $photo->url }}</td>
                        <td>{{ $photo->description }}</td>
                        <td>
                            <a href="{{ route('productphoto.show', $photo) }}" class="btn btn-info btn-sm">Prikaži</a>
                            <a href="{{ route('productphoto.edit', $photo) }}" class="btn btn-warning btn-sm">Uredi</a>
                            <form action="{{ route('productphoto.destroy', $photo) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" onclick="return confirm('Jesi siguran?')">Obriši</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
