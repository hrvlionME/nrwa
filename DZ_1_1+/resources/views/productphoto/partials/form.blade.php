@csrf

<div class="mb-3">
    <label for="url" class="form-label">URL slike</label>
    <input type="text" name="url" class="form-control" value="{{ old('url', $productphoto->url ?? '') }}" required>
</div>

<div class="mb-3">
    <label for="description" class="form-label">Opis</label>
    <textarea name="description" class="form-control">{{ old('description', $productphoto->description ?? '') }}</textarea>
</div>

<button type="submit" class="btn btn-primary">Spremi</button>
