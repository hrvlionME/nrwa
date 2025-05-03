@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Dodaj novu sliku</h1>

    <form action="{{ route('productphoto.store') }}" method="POST">
        @include('productphoto.partials.form')
    </form>
</div>
@endsection
