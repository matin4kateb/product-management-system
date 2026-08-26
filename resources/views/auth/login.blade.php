@extends('layout')

@section('title', 'Sign in')

@section('content')
<section class="card form-card auth-card">
    <p class="eyebrow">Welcome back</p>
    <h1>Sign in</h1>
    <p class="muted">Access your product workspace.</p>

    <form method="POST" action="{{ route('login.store') }}">
        @csrf
        <div class="field">
            <label for="email">Email address</label>
            <input id="email" name="email" type="email" value="{{ old('email') }}" autocomplete="email" required autofocus>
            @error('email')<p class="field-error">{{ $message }}</p>@enderror
        </div>
        <div class="field">
            <label for="password">Password</label>
            <div class="input-with-action">
                <input id="password" name="password" type="password" autocomplete="current-password" required>
                <button class="input-action password-toggle" type="button" data-password-toggle="#password" aria-label="Show password">Show</button>
            </div>
            @error('password')<p class="field-error">{{ $message }}</p>@enderror
        </div>
        <label class="checkbox">
            <input type="checkbox" name="remember" value="1" @checked(old('remember'))>
            Remember me
        </label>
        <button class="button button-primary button-block" type="submit" data-submit-label="Signing in...">Sign in</button>
    </form>

    <p class="form-footer">No account? <a href="{{ route('register') }}">Create one</a></p>
</section>
@endsection
