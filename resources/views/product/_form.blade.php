@csrf

<div class="form-grid">
    <div class="field field-wide">
        <label for="name">Product name</label>
        <input id="name" name="name" type="text" value="{{ old('name', $product->name ?? '') }}" required maxlength="64">
        @error('name')<p class="field-error">{{ $message }}</p>@enderror
    </div>

    <div class="field">
        <label for="price">Price</label>
        <input id="price" name="price" type="number" min="0" step="0.01" value="{{ old('price', $product->price ?? '') }}" required>
        @error('price')<p class="field-error">{{ $message }}</p>@enderror
    </div>

    <div class="field">
        <label for="quantity">Quantity</label>
        <input id="quantity" name="quantity" type="number" min="0" max="999999" value="{{ old('quantity', $product->quantity ?? 0) }}" required>
        @error('quantity')<p class="field-error">{{ $message }}</p>@enderror
    </div>

    <div class="field">
        <label for="category_id">Category</label>
        <select id="category_id" name="category_id">
            <option value="">Uncategorized</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" @selected((string) old('category_id', $product->category_id ?? '') === (string) $category->id)>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
        @error('category_id')<p class="field-error">{{ $message }}</p>@enderror
    </div>

    <div class="field field-wide">
        <label for="description">Description <span class="muted">(optional)</span></label>
        <textarea id="description" name="description" rows="5" maxlength="2000">{{ old('description', $product->description ?? '') }}</textarea>
        @error('description')<p class="field-error">{{ $message }}</p>@enderror
    </div>
</div>

<div class="form-actions">
    <button class="button button-primary" type="submit" data-submit-label="Saving...">{{ $submitLabel }}</button>
    <a class="button button-link" href="{{ route('products.index') }}">Cancel</a>
</div>
