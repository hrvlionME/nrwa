@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Edit Product</h2>
    @include('products.partials.form', ['product' => $product, 'route' => route('products.update', $product), 'method' => 'PUT'])
</div>
@endsection
