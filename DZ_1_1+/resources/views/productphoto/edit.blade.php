@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Uredi sliku</h1>

    <form action="{{ route('productphoto.update', $productphoto) }}" method="POST">
        @method('PUT')
        @include('productphoto.partials.form')
    </form>
</div>
@endsection
