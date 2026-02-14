<x-guest-layout>
    <div class="auth-form-container">
        <form method="POST" action="{{ route('register') }}" class="auth-form">
            @csrf

            <!-- Name -->
            <div class="auth-form-group">
                <label for="name" class="auth-form label">{{ __('Name') }}</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" />
                @error('name')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <!-- Email Address -->
            <div class="auth-form-group">
                <label for="email" class="auth-form label">{{ __('Email') }}</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="username" />
                @error('email')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <!-- Password -->
            <div class="auth-form-group">
                <label for="password" class="auth-form label">{{ __('Password') }}</label>
                <input id="password" type="password" name="password" required autocomplete="new-password" />
                @error('password')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div class="auth-form-group">
                <label for="password_confirmation" class="auth-form label">{{ __('Confirm Password') }}</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" />
                @error('password_confirmation')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <div class="auth-form-actions">
                <a class="auth-form-link" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
                <button type="submit" class="auth-form-submit">{{ __('Register') }}</button>
            </div>
        </form>
    </div>
</x-guest-layout>
