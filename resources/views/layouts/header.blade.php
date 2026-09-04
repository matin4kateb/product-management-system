<header class="topbar">
    <a class="brand" href="{{ route('index') }}" aria-label="Product Management System home">
        <img src="{{ asset('logo.svg') }}" alt="" aria-hidden="true">
        <span>Product Management System</span>
    </a>
    <button id="menu-toggle" class="menu-toggle" type="button" aria-controls="main-navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span aria-hidden="true">&#9776;</span>
    </button>
    <nav id="main-navigation" class="topnav" aria-label="Main navigation">
        <a @class(['is-active' => request()->routeIs('index')]) href="{{ route('index') }}">Home</a>
        <a @class(['is-active' => request()->routeIs('products.*')]) href="{{ route('products.index') }}">Products</a>
        <a @class(['is-active' => request()->routeIs('about')]) href="{{ route('about') }}">About</a>
        <a @class(['is-active' => request()->routeIs('contact')]) href="{{ route('contact') }}">Contact</a>
        <a @class(['is-active' => request()->routeIs('faq')]) href="{{ route('faq') }}">FAQ</a>
    </nav>
    <div class="topbar-actions">
        @auth
            <span class="user-chip">{{ Auth::user()->name }}</span>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="button button-ghost" type="submit">Logout</button>
            </form>
        @else
            <a class="button button-ghost" href="{{ route('login') }}">Login</a>
            <a class="button button-primary" href="{{ route('register') }}">Register</a>
        @endauth
    </div>
</header>
