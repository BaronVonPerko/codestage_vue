<nav class="shadow py-8">
    <div class="container mx-auto flex justify-between align-center">

        <div class="flex align-center">
            <a href="/">
                <h3 class="text-grey-darkest text-2xl">{{config('app.name', 'Code Stage')}}</h3>
            </a>

            @if(\Illuminate\Support\Facades\Auth::check())
                <div class="ml-8">
                    @include('nav.applinks')
                </div>
            @endif
        </div>

        <div>
            @if(\Illuminate\Support\Facades\Auth::check())
                <a href="{{ route('logout') }}">Logout</a>
            @endif

            @if(\Illuminate\Support\Facades\Auth::guest())
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endif
        </div>
    </div>

</nav>