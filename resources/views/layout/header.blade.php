@section('header-content')
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="{{ asset('img/arikp_logo-removebg-preview.png') }}" alt="logo"
                            style="max-height: 50px;">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Orders</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">cart</a>
                            </li>
                        </ul>
                        <form class="d-flex me-2 mb-2 mb-lg-0">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-primary" type="submit">Search</button>
                        </form>
                        <ul class="navbar-nav me-2 mb-2 mb-lg-0">
                            <li class="nav-item me-2">
                                <a href="{{ route('loginPage') }}">
                                    <button class="btn btn-outline-primary">
                                        Login
                                    </button>
                                </a>
                            </li>
                            <li class="nav-item">
                                <button class="btn btn-outline-primary">Register</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
@stop

<style>
    ul .nav-item {
        font-size: 25px;
        font-weight: 800;
    }

    ul .nav-item a {
        text-decoration: none !important;
    }

    ul .nav-item a:hover {
        color: white;
    }

</style>
