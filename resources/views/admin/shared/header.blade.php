<header class="c-header c-header-light c-header-fixed c-header-with-subheader">
    <button class="c-header-toggler c-class-toggler d-lg-none mr-auto" type="button" data-target="#sidebar"
            data-class="c-sidebar-show">
        <span class="c-header-toggler-icon"></span>
    </button>
    <a class="c-header-brand d-sm-none" href="#">
        <img class="c-header-brand" src="{{ asset('img/logo.png') }}"
             height="46" alt="Logo">
    </a>
    <button class="c-header-toggler c-class-toggler ml-3 d-md-down-none" type="button" data-target="#sidebar"
            data-class="c-sidebar-lg-show" responsive="true">
        <span class="c-header-toggler-icon"></span>
    </button>
    <ul class="c-header-nav ml-auto mr-4">
        <li class="c-header-nav-item d-md-down-none mx-2">
            <a class="c-header-nav-link">
                <svg class="c-icon">
                    <use xlink:href="{{ env('APP_URL', '') }}/icons/sprites/free.svg#cil-bell"></use>
                </svg>
            </a>
        </li>
        <li class="c-header-nav-item d-md-down-none mx-2">
            <a class="c-header-nav-link">
                <svg class="c-icon">
                    <use xlink:href="{{ env('APP_URL', '') }}/icons/sprites/free.svg#cil-list-rich"></use>
                </svg>
            </a>
        </li>
        <li class="c-header-nav-item d-md-down-none mx-2">
            <a class="c-header-nav-link">
                <svg class="c-icon">
                    <use xlink:href="{{ env('APP_URL', '') }}/icons/sprites/free.svg#cil-envelope-open"></use>
                </svg>
            </a>
        </li>
        <li class="c-header-nav-item dropdown">
            <a class="c-header-nav-link"
               data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <div class="c-avatar">
                    <img class="c-avatar-img" src="{{ asset('img/logo.png') }}" alt="Email">
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right pt-0">
                <a class="dropdown-item" href="/" target="_blank">
                    {{ __('Visit site') }}
                </a>
                <div class="dropdown-header bg-light py-2"><strong>Account</strong></div>

                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
    </ul>
</header>

