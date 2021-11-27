<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <div class="d-flex flex-grow-1">
            <span class="w-100 d-lg-none d-block">
                <!-- hidden spacer to center brand on mobile --></span>
            <a class="navbar-brand ml-5" href="/"> <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/45/D-Link_wordmark.svg/2560px-D-Link_wordmark.svg.png" alt="" style="width: 20rem;"> </a>
            <div class="w-100 text-right">
            </div>
        </div>
        <div class="collapse navbar-collapse flex-grow-1 text-right" id="myNavbar7">
            <ul class="navbar-nav ms-auto flex-nowrap">
                @guest
                <li class="nav-item">
                    <a href="/login" class="nav-link">Login</a>
                </li>
                
                <li class="nav-item">
                    <a href="/register" class="nav-link">Register</a>
                </li> 
                @endguest
                @auth

                @endauth
            </ul>
        </div>
    </div>
</nav>