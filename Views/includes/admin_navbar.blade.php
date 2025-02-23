<nav class="navbar navbar-expand navbar-light bg-white topbar mb-2 static-top shadow">
    <div class="container-fluid">
        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>

        <span class="nav-heading">
            {{ optional(optional(optional(auth()->user())->roles())->first())->name }} panel
        </span>

        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">

            @if(config('search.models'))
                @ifcomponent('search::search-navbar')
                    @livewire('search::search-navbar')
                @endifcomponent
            @endif

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

            @if(Auth::user())

                @include('layout::includes.user_info_dropdown')

            @endif
        </ul>
    </div>
</nav>

