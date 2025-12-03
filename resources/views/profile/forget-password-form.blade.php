<div class="col-span-6 sm:col-span-4">
    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div class="hidden">
            <x-label for="email" value="{{ __('Email') }}" />
            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="Auth::user()->email" required
                autofocus autocomplete="username" />
        </div>

        <div class="mt-2">
            <x-button>
                {{ __('Email Password Reset Link') }}
            </x-button>
        </div>
    </form>
</div>
