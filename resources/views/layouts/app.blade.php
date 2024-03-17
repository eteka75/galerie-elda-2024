<!DOCTYPE  html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('partials.head')
<script>
    /*
$(function() {
    AOS.init();
});*/
</script>

<body>
    <div id='app'>
        @include('partials.nav')
        <div class="" >
            @include('partials.session')
            @include('partials.errors')
            @yield('breadcrumb')
            @yield('content')
        </div>
        @include('partials.footer')
    </div>
    <script src="{{ asset('storage/assets/vendor/bootstrap-5.3.0/js/bootstrap.min.js') }}"></script>
    <script src="{{asset("storage/assets/vendor/owlcarousel/js/jquery.min.js")}}"></script>
    <script src="{{asset("storage/assets/vendor/lightbox2/js/lightbox.min.js")}}"></script>
    @yield('scripts')
</body>

</html>
