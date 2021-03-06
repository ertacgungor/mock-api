<!doctype html>
<html lang="en">

<head>
    @include('layout.partials.head')
    @yield('custom_css')
</head>

<body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
        @include('layout.partials.header')
    </div>
    <!--content-->
    <div class="container">
        @yield('content')
    </div>
    <!--footer-->
    <footer class="footer">
        @include('layout.partials.footer')
    </footer>

    <!--scripts-->
    @include('layout.partials.scripts')
    @yield('custom_js')

</body>

</html>