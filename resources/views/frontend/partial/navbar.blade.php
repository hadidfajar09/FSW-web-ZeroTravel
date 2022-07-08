   <!-- Navbar -->
   <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('frontend/images/logo-glasstea.png') }}" alt="logo"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button"  data-toggle="collapse" data-target="#navb">
<span class="navbar-toggler-icon">
</span>
        </button>
        <div class="collapse navbar-collapse" id="navb">
            <ul class="navbar-nav ml-auto mr-4">
                <li class="nav-item">
                    <a href="" class="nav-link active">Home</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">Paket Travel</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">
                        Services
                    </a>
                    <div class="dropdown-menu">
                        <a href="" class="dropdown-item">Satu</a>
                        <a href="" class="dropdown-item">Dua</a>
                        <a href="" class="dropdown-item">Tiga</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">Testimonial</a>
                </li>
            </ul>
             <!-- mobile button -->

@guest
<form action="" class="form-inline d-sm-block d-md-none">
    <button class="btn btn-login my-2 my-sm-0 " type="button" onclick="event.preventDefault(); location.href='{{ route('login') }}'">Masuk</button>
</form>
<!-- Desktop Button -->

<form action="" class="form-inline my-2 my-lg-0 d-none d-md-block">
    <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="button" onclick="event.preventDefault(); location.href='{{ route('login') }}'">Masuk</button>
</form>
@endguest


@auth
<form class="form-inline d-sm-block d-md-none" action="{{ route('logout') }}" method="POST">
    @csrf
    <button class="btn btn-login my-2 my-sm-0" type="submit">Logout</button>
</form>
<!-- Desktop Button -->

<form class="form-inline my-2 my-lg-0 d-none d-md-block" action="{{ route('logout') }}" method="POST">
    @csrf
    <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="submit">Logout</button>
</form>
@endauth
        </div>
    </nav>
</div>