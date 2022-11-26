<nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-dark" aria-label="Main navigation">
    <div class="container">

    
        <a class="navbar-brand logo-text" href="{{url('/')}}">HCS</a>

        <button class="navbar-toggler p-0 border-0" onclick="showMenu()" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ms-auto navbar-nav-scroll">
                <li class="nav-item">
                    @if (Auth::user())
                        <a class="nav-link active" aria-current="page" href="{{url('/home')}}">Home</a>
                    @else
                        <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
                    @endif
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/')}}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/')}}">FAQs</a>
                </li>
                <li class="nav-item">
                    @if (Auth::user())
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="p-2 btn-reverse" type="submit">Logout</button>
                        </form>
                    @else
                            <a class="nav-link" href="{{url('/login')}}">Login</a>
                        
                        </li>
                        <li class="nav-item">
                            <a class="btn-reverse" href="{{url('/register')}}">Get Started</a>
                        </li>
                    @endif
            </ul>
        </div> <!-- end of navbar-collapse -->
    </div> <!-- end of container -->
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong> {!! session('success') !!} </strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong> {!! session('error') !!} </strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if (session('warning'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong> {!! session('warning') !!} </strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if (session('info'))
        <div class="alert alert-info alert-dismissible fade show" role="alert">
            <strong> {!! session('info') !!} </strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
</nav>
