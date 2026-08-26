@extends('layout')

@section('title', 'Products')

@section('content')
<section class="page-heading">
    <div>
        <p class="eyebrow">Catalog</p>
        <h1>Products</h1>
        <p class="muted">Browse active products and manage the listings you own.</p>
    </div>
    @auth
        <a class="button button-primary" href="{{ route('products.create') }}"><span aria-hidden="true">+</span> Add product</a>
    @endauth
</section>

<section class="card">
    <form class="filters" method="GET" action="{{ route('products.index') }}">
        <div class="field">
            <label for="search">Search</label>
            <input id="search" name="search" type="search" value="{{ request('search') }}" placeholder="Name or SKU">
        </div>
        <div class="field">
            <label for="category">Category</label>
            <select id="category" name="category">
                <option value="">All categories</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" @selected((string) request('category') === (string) $category->id)>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <button class="button button-secondary" type="submit">Filter</button>
        @if (request()->hasAny(['search', 'category']))
            <a class="button button-link" href="{{ route('products.index') }}">Clear</a>
        @endif
    </form>
</section>

<section class="card">
    @if ($products->isEmpty())
        <div class="empty-state">
            <div class="empty-icon" aria-hidden="true">+</div>
            <h2>No products found</h2>
            <p class="muted">Try a different search or add your first product.</p>
            @auth
                <a class="button button-primary" href="{{ route('products.create') }}">Add your first product</a>
            @endauth
        </div>
    @else
        <div class="table-wrap">
            <table>
                <caption class="sr-only">Product catalog</caption>
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>SKU</th>
                        <th>Category</th>
                        <th>Seller</th>
                        <th>Price</th>
                        <th>Stock</th>
                        @auth<th class="actions-column">Actions</th>@endauth
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td data-label="Product">
                                <strong>{{ $product->name }}</strong>
                                @if ($product->description)
                                    <span class="table-subtitle">{{ Str::limit($product->description, 70) }}</span>
                                @endif
                            </td>
                            <td data-label="SKU"><code>{{ $product->sku }}</code></td>
                            <td data-label="Category">{{ $product->category?->name ?? 'Uncategorized' }}</td>
                            <td data-label="Seller">{{ $product->user->name }} {{ $product->user->lastname }}</td>
                            <td data-label="Price">${{ number_format((float) $product->price, 2) }}</td>
                            <td data-label="Stock"><span class="stock {{ $product->quantity === 0 ? 'stock-empty' : '' }}">{{ $product->quantity }}</span></td>
                            @auth
                                <td data-label="Actions" class="actions">
                                    @can('update', $product)
                                        <a class="button button-small button-secondary" href="{{ route('products.edit', $product) }}">Edit</a>
                                    @endcan
                                    @can('delete', $product)
                                        <form method="POST" action="{{ route('products.destroy', $product) }}" data-confirm="Delete this product?">
                                            @csrf
                                            @method('DELETE')
                                            <button class="button button-small button-danger" type="submit">Delete</button>
                                        </form>
                                    @endcan
                                </td>
                            @endauth
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="pagination">{{ $products->links() }}</div>
    @endif
</section>
@endsection
