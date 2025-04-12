@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Add New Product</h2>
    @include('products.partials.form', ['product' => new \App\Models\Product, 'route' => route('products.store'), 'method' => 'POST'])
</div>
@endsection
