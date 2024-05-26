<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <h4 class="mb-3 f-w-400">Signin</h4>
    <hr>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div class="form-group mb-3 text-left">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" 
                            type="email" 
                            name="email"
                            placeholder="Email address"
                            :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="form-group mb-3 text-left">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            placeholder="Password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4 text-left">
            <label for="remember_me" class="custom-control custom-checkbox inline-flex items-center">
                <input id="remember_me" type="checkbox" class="custom-control-input" name="remember">
                <span class="custom-control-label">{{ __('Remember me') }}</span>
            </label>
        </div>
        <button class="btn btn-primary btn-block mb-4"> Signin</button>
        <!-- <x-primary-button>
            {{ __('Log in') }}
        </x-primary-button> -->
        <hr>
        <div class="flex items-center ">
            @if (Route::has('password.request'))
            <p class="text-muted">
                {{ __('Forgot your password?') }}
                <a class="f-w-400 underline" href="{{ route('password.request') }}">
                    Reset
                </a>
            </p>
                
            @endif
        </div>
    </form>
</x-guest-layout>
