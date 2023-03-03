<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary{{ app()->environment(['local', 'stage']) ? '-'.app()->environment() : '' }} sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">

        {{ config('app.name') }}

    </a>

    @if(app()->environment(['stage']))
        <div class="text-white text-center py-1 h5">
            {{ app()->environment() }}
        </div>
    @endif


    @section('left_sidebar')
        @foreach(config('rapyd-livewire.menus.admin') as $menu)
                @include($menu)
        @endforeach
    @show

    @yield('role_menu')


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
