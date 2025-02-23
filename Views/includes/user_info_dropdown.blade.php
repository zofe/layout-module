<li class="nav-item dropdown no-arrow">

    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <div class="mr-2 d-none d-lg-inline text-gray-600 small">
            <div class="px-2">{{ Auth::user()->name }}</div>
            @if(Auth::user()->company) <div class="text-center mt-n2"><small><em>{{Auth::user()->company->business_name}}</em></small></div> @endif
        </div>
        <img class="img-profile rounded-circle" src="{{ Auth::user()->avatar ? asset("storage/users/".Auth::user()->id."/photos/avatar.jpg") : asset('vendor/layout/img/user-account-icon.png') }}">
    </a>

    <!-- Dropdown - User Information -->
    <div class="dropdown-menu dropdown-menu-end shadow animated--grow-in" aria-labelledby="userDropdown">
        @if(Route::has('profile'))
            <a class="dropdown-item" href="{{ route('profile') }}">
                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                {{ __('Profile') }}
            </a>
        @endif

        @impersonating
        <a class="dropdown-item" href="{{ route('impersonate.leave') }}">
            <i class="fas fa-user-slash fa-sm fa-fw mr-2 text-gray-400"></i>
            {{ __('Leave impersonation') }}
        </a>
        @endImpersonating

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a class="dropdown-item" href="#" onclick="this.parentNode.submit();">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>

                {{ __('Logout') }}
            </a>
        </form>

        @yield('user_info_dropdown')

    </div>

</li>
