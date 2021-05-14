<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Task Manager</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">








            @if(auth()->check())
                <a href="#" class="btn btn-info">Admin</a>
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button class="btn-danger">logout</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="btn btn-success">login</a>
                 <a href="{{ route('register') }}" class="btn btn-info">Register</a>
            @endif
        </div>
    </div>
</nav>
