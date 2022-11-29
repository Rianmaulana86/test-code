<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container px-4 px-lg-5">
        @auth
         <h3 class="navbar-brand">Welcome {{ auth()->user()->name }}</h3>
        @endauth
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item"><a class="nav-link {{ Request::is('index') ? 'active' : '' }}" aria-current="page" href="/dashboard">Blog</a></li>
                <li class="nav-item"><a class="nav-link {{ Request::is('home') ? 'active' : '' }}" href="/home">Home</a></li>
                @if(auth()->user()->is_admin === 1)
                <li class="nav-item"><a class="nav-link" href="/dashboard">Dashboard</a></li>
                @endif
            </ul>
            <form class="d-flex mt-2" action="/logout" method="post">
                @csrf
                <button class="btn btn-outline-light" type="submit">
                    Logout
                </button>
            </form>
        </div>
    </div>
</nav>