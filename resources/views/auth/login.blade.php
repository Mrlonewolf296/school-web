<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="auth-form-container">
        <form method="POST" action="{{ route('login') }}" class="auth-form">
            @csrf

            <!-- Email Address -->
            <div class="auth-form-group">
                <label for="email" class="auth-form label">{{ __('Email') }}</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" />
                @error('email')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <!-- Password -->
            <div class="auth-form-group">
                <label for="password" class="auth-form label">{{ __('Password') }}</label>
                <input id="password" type="password" name="password" required autocomplete="current-password" />
                @error('password')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <!-- Remember Me -->
            <div class="auth-form-checkbox">
                <input id="remember_me" type="checkbox" name="remember">
                <label for="remember_me">{{ __('Remember me') }}</label>
            </div>

            <div class="auth-form-actions">
                @if (Route::has('password.request'))
                    <a class="auth-form-link" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <button type="submit" class="auth-form-submit">{{ __('Log in') }}</button>
            </div>
        </form>
    </div>
</x-guest-layout>
