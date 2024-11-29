@yield('navbar')

<body id="top">
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="wrapper row1">
        <header id="header" class="hoc clear">
            <div id="logo" class="fl_left">
                <!-- ################################################################################################ -->
                <h1 class="logoname"><a href="/"><span>Best-niania</span> </a></h1>
                <!-- ################################################################################################ -->
            </div>
            <nav id="mainav" class="fl_right">
                <ul class="clear">
                    <li class="active"><a href="{{ route('home') }}">{{ __('navbar.home') }}</a></li>
                    <li><a href="{{ route('search') }}">{{ __('navbar.search') }}</a></li>
                    <li><a href="{{ route('version') }}">{{ __('navbar.version') }}</a></li>

                    @auth
                        <li>{{ Auth::user()->name }}</li>
                        <li><a href="{{ route('dashboard') }}">{{ __('navbar.edit') }}</a></li>
                        <li><a href="{{ route('signout') }}">{{ __('navbar.logout') }}</a></li>
                    @endauth

                    @guest
                        <li><a href="{{ route('login') }}">{{ __('navbar.login') }}</a></li>
                        <li><a href="{{ route('register-user') }}">{{ __('navbar.register') }}</a></li>
                    @endguest

                    @include('partials.localization')
                </ul>
            </nav>        </header>
    </div>
