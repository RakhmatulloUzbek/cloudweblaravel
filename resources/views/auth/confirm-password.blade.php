<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <a href="{{route('home')}}" class="navbar-brand1 logodefault"><img style="width: 200px; height: 100px"alt="footer-logo" src="{{asset('assets')}}/home/img/logos/pengona.png"></a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Bu, uygulamanın güvenli bir alanıdır. Lütfen devam etmeden önce şifrenizi onaylayın.') }}
        </div>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <div>
                <x-jet-label for="password" value="{{ __('Parola') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" autofocus />
            </div>

            <div class="flex justify-end mt-4">
                <x-jet-button class="ml-4">
                    {{ __('Onayla') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
