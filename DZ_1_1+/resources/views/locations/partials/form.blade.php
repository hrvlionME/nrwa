<form action="{{ $route }}" method="POST">
    @csrf
    @if($method !== 'POST')
        @method($method)
    @endif

    <div class="row">
        <div class="col-md-6 mb-3">
            <label>Name</label>
            <input type="text" name="Name" class="form-control" value="{{ old('Name', $location->Name) }}" required>
        </div>
        <div class="col-md-6 mb-3">
            <label>Cost Rate</label>
            <input type="number" step="0.01" name="CostRate" class="form-control" value="{{ old('CostRate', $location->CostRate) }}" required>
        </div>
        <div class="col-md-6 mb-3">
            <label>Availability</label>
            <input type="number" step="0.01" name="Availability" class="form-control" value="{{ old('Availability', $location->Availability) }}" required>
        </div>
        <div class="col-md-6 mb-3">
            <label>Modified Date</label>
            <input type="date" name="ModifiedDate" class="form-control" value="{{ old('ModifiedDate', $location->ModifiedDate ? \Illuminate\Support\Carbon::parse($location->ModifiedDate)->format('Y-m-d') : '') }}" required>
        </div>
    </div>

    <button type="submit" class="btn btn-success mt-2">Save</button>
    <a href="{{ route('locations.index') }}" class="btn btn-secondary mt-2">Cancel</a>
</form>
