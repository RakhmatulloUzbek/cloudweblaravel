<x-guest-layout>
    <div class="pt-4 bg-gray-100">
        <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0">
            <div>
                <!-- logo -->
                <a href="{{route('home')}}" class="navbar-brand1 logodefault"><img style="width: 200px; height: 100px"alt="footer-logo" src="{{asset('assets')}}/home/img/logos/pengona.png"></a>
                <!-- end logo -->
            </div>

            <div class="w-full sm:max-w-2xl items-center mt-6 p-6 bg-white shadow-md overflow-hidden sm:rounded-lg prose">
                {!! $policy !!}
            </div>
        </div>
    </div>
</x-guest-layout>
