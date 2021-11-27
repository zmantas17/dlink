<!DOCTYPE html>
<html lang="en">
<style>
    header{
        background-image: url("https://images.unsplash.com/photo-1446451933985-0b67d5a32375?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8cm9hZCUyMGJsdXJ8ZW58MHx8MHx8&w=1000&q=80");
        height: 100vh;
        background-size: cover;
        background-position: center center;
        background-attachment: fixed;
    }

    .spaces{
        padding-top: 13%;
    }
    .space{
        font-size: 1.65rem;
    }
    .space a{
        font-size: 2rem;
    }

    .space-top{
        margin-top: 10%;
    }
</style>
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