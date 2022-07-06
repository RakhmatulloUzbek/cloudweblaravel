<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <a href="{{route('home')}}" class="navbar-brand1 logodefault"><img style="width: 200px; height: 100px"alt="footer-logo" src="{{asset('assets')}}/home/img/logos/pengona.png"></a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Parolanızı mı unuttunuz? Sorun değil. Sadece e-posta adresinizi bize bildirin, size yeni bir tane seçmenize izin verecek bir şifre sıfırlama bağlantısını e-posta ile gönderelim.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('E-posta Şifre Sıfırlama Bağlantısı') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
