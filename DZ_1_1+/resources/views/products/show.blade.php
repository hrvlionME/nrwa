@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Product Details</h2>
    <ul class="list-group">
        <li class="list-group-item"><strong>Product Number:</strong> {{ $product->ProductNumber }}</li>
        <li class="list-group-item"><strong>Name:</strong> {{ $product->Name }}</li>
        <li class="list-group-item"><strong>List Price:</strong> {{ $product->ListPrice }}</li>
        <li class="list-group-item"><strong>Standard Cost:</strong> {{ $product->StandardCost }}</li>
        <li class="list-group-item"><strong>Safety Stock Level:</strong> {{ $product->SafetyStockLevel }}</li>
        <li class="list-group-item"><strong>Reorder Point:</strong> {{ $product->ReorderPoint }}</li>
        <li class="list-group-item"><strong>Sell Start Date:</strong> {{ $product->SellStartDate }}</li>
        {{-- Add more fields as needed --}}
    </ul>
    <a href="{{ route('products.index') }}" class="btn btn-secondary mt-3">Back</a>
</div>
@endsection
