@include('partials.head')
@include('partials.navbar')
@if (Request::is('/'))
    @include('partials.slider')
@endif
@yield('content')
@include('partials.footer')
@include('partials.scripts')
