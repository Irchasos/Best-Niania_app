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
                <!-- ################################################################################################ -->
                <ul class="clear">
                    <li class="active"><a href="{{ route('home') }}">Strona domowa</a></li>


                    <li><a href="{{ route('search') }}">Wyszukiwarka</a></li>
                    <li><a href="{{ route('version') }}">Wersja Aktualizacji</a></li>
                    {{--               <li><a href="{{route('login')}}">Logowanie</a></li> --}}
                    {{--                <li><a href="{{route('register')}}">Rejestracja</a></li> --}}
                </ul>
                <!-- ################################################################################################ -->
            </nav>
        </header>
    </div>