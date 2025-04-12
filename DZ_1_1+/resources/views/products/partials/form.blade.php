<form action="{{ $route }}" method="POST">
    @csrf
    @if($method !== 'POST')
        @method($method)
    @endif

    <div class="row">
        <div class="col-md-6 mb-3">
            <label>Name</label>
            <input type="text" name="Name" class="form-control" value="{{ old('Name', $product->Name) }}" required>
        </div>

        <div class="col-md-6 mb-3">
            <label>Product Number</label>
            <input type="text" name="ProductNumber" class="form-control" value="{{ old('ProductNumber', $product->ProductNumber) }}" required>
        </div>

        <div class="col-md-4 mb-3">
            <label>List Price</label>
            <input type="number" step="0.01" name="ListPrice" class="form-control" value="{{ old('ListPrice', $product->ListPrice) }}" required>
        </div>

        <div class="col-md-4 mb-3">
            <label>Standard Cost</label>
            <input type="number" step="0.01" name="StandardCost" class="form-control" value="{{ old('StandardCost', $product->StandardCost) }}" required>
        </div>

        <div class="col-md-4 mb-3">
            <label>Safety Stock Level</label>
            <input type="number" name="SafetyStockLevel" class="form-control" value="{{ old('SafetyStockLevel', $product->SafetyStockLevel) }}" required>
        </div>

        <div class="col-md-4 mb-3">
            <label>Reorder Point</label>
            <input type="number" name="ReorderPoint" class="form-control" value="{{ old('ReorderPoint', $product->ReorderPoint) }}" required>
        </div>

        <div class="col-md-4 mb-3">
            <label>Sell Start Date</label>
            <input type="date" name="SellStartDate" class="form-control" value="{{ old('SellStartDate', $product->SellStartDate ? \Illuminate\Support\Carbon::parse($product->SellStartDate)->format('Y-m-d') : '') }}" required>
        </div>

        <div class="col-md-4 mb-3">
            <label>Sell End Date</label>
            <input type="date" name="SellEndDate" class="form-control" value="{{ old('SellEndDate', $product->SellEndDate ? \Illuminate\Support\Carbon::parse($product->SellEndDate)->format('Y-m-d') : '') }}">
        </div>

        <div class="col-md-4 mb-3">
            <label>Discontinued Date</label>
            <input type="date" name="DiscontinuedDate" class="form-control" value="{{ old('DiscontinuedDate', $product->DiscontinuedDate ? \Illuminate\Support\Carbon::parse($product->DiscontinuedDate)->format('Y-m-d') : '') }}">
        </div>

        <!-- Add more fields as necessary. For text fields, numbers, etc. -->
        <div class="col-md-6 mb-3">
            <label>Color</label>
            <input type="text" name="Color" class="form-control" value="{{ old('Color', $product->Color) }}">
        </div>
        <div class="col-md-6 mb-3">
            <label>Make Flag</label>
            <input type="text" name="MakeFlag" class="form-control" value="{{ old('MakeFlag', $product->MakeFlag) }}" required>
        </div>
        <div class="col-md-6 mb-3">
            <label>Finished Goods Flag</label>
            <input type="text" name="FinishedGoodsFlag" class="form-control" value="{{ old('FinishedGoodsFlag', $product->FinishedGoodsFlag) }}" required>
        </div>
        <div class="col-md-6 mb-3">
            <label>Days to Manufacture</label>
            <input type="number" name="DaysToManufacture" class="form-control" value="{{ old('DaysToManufacture', $product->DaysToManufacture) }}" required>
        </div>
    </div>

    <button type="submit" class="btn btn-success mt-2">Save</button>
    <a href="{{ route('products.index') }}" class="btn btn-secondary mt-2">Cancel</a>
</form>
