<!DOCTYPE html>
<html lang="en">
@include("_partials/head")
<body class="h-auto text-white">
        @include("_partials/nav")

        @yield('content')

    <div class="fixed-bottom">
        @include("_partials/footer")
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>