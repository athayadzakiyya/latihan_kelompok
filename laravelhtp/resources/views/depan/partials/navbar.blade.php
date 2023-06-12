{{-- halaman navbar --}}

<div class="container-fluid bg-light position-relative shadow">
    <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5">
        <a href="" class="navbar-brand font-weight-bold text-secondary" style="font-size: 50px">
            <img src="{{ asset('depan/img/logo.jpg') }} " class="img-fluid" width="50px" height="50px" alt="gambar logo">
            <span class="text-primary">Baiturrahim</span>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav font-weight-bold mx-auto py-0">
                <a href="{{ url('/') }}" class="nav-item nav-link  {{ $title == 'home' ? 'active' : '' }}">Home</a>
                <a href="{{ url('/about') }}"
                    class="nav-item nav-link {{ $title == 'about' ? 'active' : '' }}">About</a>
                <a href="{{ url('/class') }}"
                    class="nav-item nav-link {{ $title == 'class' ? 'active' : '' }}">Class</a>
                <a href="{{ url('/guru') }}" class="nav-item nav-link {{ $title == 'guru' ? 'active' : '' }}">Guru</a>
                <a href="{{ url('/galery') }}"
                    class="nav-item nav-link {{ $title == 'galery' ? 'active' : '' }}">Gallery</a>
                <a href="{{ url('/blog') }}"
                    class="nav-item nav-link {{ $title == 'blog' ? 'active' : '' }}">Blog</a>
                <a href="{{ url('/contact') }}"
                    class="nav-item nav-link {{ $title == 'contact' ? 'active' : '' }}">Contact</a>
            </div>
            <div>

                @if ($title == 'login' || $title == "register")
                    {{ $tile = "" }}
                @else
                    <a href="{{ url('/login') }}" class="btn btn-primary px-4">Login</a>
                    <a href="{{ url("/register") }}" class="btn btn-primary px-4">Register</a>
                @endif

                {{-- untuk halaman logout --}}
                {{-- <a href="{{ url("/register") }}" class="btn btn-primary px-4">Logout</a> --}}
                
                <a href="{{ url("/profile") }}" class="btn btn-primary px-4">Mirlani</a>

            </div>
        </div>
    </nav>
</div>
