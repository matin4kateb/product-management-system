<aside class="sidebar">
    <p class="sidebar-label">Workspace</p>
    <h2>Inventory</h2>
    <nav aria-label="Product navigation">
        <a href="{{ route('products.index') }}">All products</a>
        @auth
            <a href="{{ route('products.create') }}">Add product</a>
        @else
            <p class="sidebar-note">Sign in to manage your products.</p>
        @endauth
    </nav>
</aside>
