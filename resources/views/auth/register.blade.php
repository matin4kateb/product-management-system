@extends('layout')

@section('title', 'Create account')

@section('content')
<section class="card form-card">
    <p class="eyebrow">Get started</p>
    <h1>Create account</h1>
    <p class="muted">Set up your seller profile to manage products.</p>

    <form method="POST" action="{{ route('register.store') }}">
        @csrf
        <div class="form-grid">
            <div class="field">
                <label for="name">First name</label>
                <input id="name" name="name" type="text" value="{{ old('name') }}" required>
                @error('name')<p class="field-error">{{ $message }}</p>@enderror
            </div>
            <div class="field">
                <label for="lastname">Last name</label>
                <input id="lastname" name="lastname" type="text" value="{{ old('lastname') }}" required>
                @error('lastname')<p class="field-error">{{ $message }}</p>@enderror
            </div>
            <div class="field">
                <label for="national_id">National ID</label>
                <input id="national_id" name="national_id" type="text" value="{{ old('national_id') }}" required>
                @error('national_id')<p class="field-error">{{ $message }}</p>@enderror
            </div>
            <div class="field">
                <label for="phone">Phone</label>
                <input id="phone" name="phone" type="tel" value="{{ old('phone') }}" required>
                @error('phone')<p class="field-error">{{ $message }}</p>@enderror
            </div>
            <div class="field field-wide">
                <label for="email">Email address</label>
                <input id="email" name="email" type="email" value="{{ old('email') }}" autocomplete="email" required>
                @error('email')<p class="field-error">{{ $message }}</p>@enderror
            </div>
            <div class="field">
                <label for="city">City</label>
                <input id="city" name="city" type="text" value="{{ old('city') }}" required>
                @error('city')<p class="field-error">{{ $message }}</p>@enderror
            </div>
            <div class="field field-wide">
                <label for="address">Address</label>
                <input id="address" name="address" type="text" value="{{ old('address') }}" required>
                @error('address')<p class="field-error">{{ $message }}</p>@enderror
            </div>
            <div class="field">
                <label for="password">Password</label>
                <div class="input-with-action">
                    <input id="password" name="password" type="password" autocomplete="new-password" required>
                    <button class="input-action password-toggle" type="button" data-password-toggle="#password" aria-label="Show password">Show</button>
                </div>
                @error('password')<p class="field-error">{{ $message }}</p>@enderror
            </div>
            <div class="field">
                <label for="password_confirmation">Confirm password</label>
                <div class="input-with-action">
                    <input id="password_confirmation" name="password_confirmation" type="password" autocomplete="new-password" required>
                    <button class="input-action password-toggle" type="button" data-password-toggle="#password_confirmation" aria-label="Show password">Show</button>
                </div>
            </div>
        </div>
        <button class="button button-primary button-block" type="submit" data-submit-label="Creating account...">Create account</button>
    </form>

    <p class="form-footer">Already registered? <a href="{{ route('login') }}">Sign in</a></p>
</section>
@endsection
