<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
        <div class="d-flex flex-grow-1">
            <span class="w-100 d-lg-none d-block">
                <!-- hidden spacer to center brand on mobile --></span>
            <a class="navbar-brand logo-image ml-5" href="/"> <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/45/D-Link_wordmark.svg/2560px-D-Link_wordmark.svg.png" alt="" style="width: 30rem;"></a>
            <div class="w-100 text-right"></div>
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
                <li class="nav-item hidden xl:inline-block mr-5">
                    <span class="text-nowrap" style="color: #58dcfa;" >Logged in as:</span> 
                    <b>{{ Auth::user()->name }}</b> 
                </li> 
                @endauth
            </ul>
        </div>
    </div>
</nav>