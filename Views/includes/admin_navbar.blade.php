<nav class="navbar navbar-admin navbar-expand-sm topbar mb-2 static-top shadow">
    <div class="container-fluid">

{{--        <span class="nav-brand">--}}
{{--            {{ optional(optional(optional(auth()->user())->roles())->first())->name }} panel--}}
{{--        </span>--}}

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
        </button>


        <div class="collapse navbar-collapse rounded" id="navbarScroll">


            @if(config('search.models'))

                @livewire('search::search-navbar')

            @endif


            <ul class="navbar-nav ml-auto">

                @if(config('app.locales'))
                    <li class="nav-item dropdown no-arrow">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <img src="{{ asset('vendor/layout/img/'.app()->getLocale().'.svg') }}" width="15">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            @foreach(config('app.locales') as $locale)
                                <a class="dropdown-item" href="{{ url_lang($locale) }}">
                                    <img src="{{ asset("vendor/layout/img/{$locale}.svg") }}" width="15">
                                    {{ $locale }}
                                </a>
                            @endforeach
                        </div>
                    </li>
                @endif


                @if (Route::has('admin.home') && Route::has('home'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                @endif

                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif
                @endguest

                @include('layout::includes.theme-switcher')

                @if(Auth::user())

                    @include('layout::includes.user_info_dropdown')

                @endif



            </ul>

        </div>

        <!-- Topbar Navbar -->

    </div>
</nav>

