<!DOCTYPE html>
<html lang="en">
@include("_partials/head")
<body class="h-100 bg-dark text-white">
        @include("_partials/nav")

        @yield('content')

    <div class="fixed-bottom">
        @include("_partials/footer")
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>