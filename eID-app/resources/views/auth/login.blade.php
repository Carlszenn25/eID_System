<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <h2 class="text-2xl font-bold text-white text-center">LOGIN</h2>
          
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Learner Reference Number" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
          </div>
          
          

        <!-- Password -->
        <div class="mt-4">

          
            <x-text-input id="password" class="block mt-1 w-full"
                          type="password"
                          name="password"
                          required autocomplete="current-password"
                          placeholder="Enter your password" />
          
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
          </div>
          

        <!-- Remember Me -->
        <div class="block mt-4 text-center">
            <label for="remember_me" class="inline-flex items-center">
              
              <span class="ml-2 text-sm text-red-700">{{ __('*Only for ADMIN') }}</span>
            </label>
          </div>
          
        <div class="flex items-center justify-end mt-4">
           

            <x-primary-button class="ml-3">
                {{ __('Login') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
