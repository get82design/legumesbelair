<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@include('components.head')
<body class="animsition">
    <div id="app">
        @include('components.nav.nav3')

        @yield('content')

        @include('components.footer.footer3')
    </div>
    @include('components.foot')
    @yield('script')
</body>
</html>