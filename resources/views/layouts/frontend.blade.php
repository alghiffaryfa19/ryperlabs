<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('rpl/style.css')}}">

    <title>@yield('title') - RyperLabs</title>
  </head>
  <body>
    <!-- navbar begin -->
    <nav class="navbar navbar-dark navbar-expand-md bg-primary fixed-top">
      <a class="navbar-brand" href="#"><img src="{{asset('rpl/img/logo.png')}}"> Ryper Lab</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#home-section">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about-section">Tentang Kami</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact-section">Hubungi Kami</a>
          </li>
          <li class="nav-item">
            @if (Route::has('login'))
                
                    @auth
                        <a class="nav-link" href="{{ url('/home') }}">Home</a>
                    @else
                        <a class="nav-link" href="{{route('login')}}">Masuk</a>
                    @endauth
                
            @endif
          </li>
        </ul>
      </div>
    </nav>
    <!-- navbar end -->
    @yield('content')
    <!-- content start -->
    
      <div class="row no-gutters justify-content-center py-3 bg-3 text-white">
        <div class="col-12 col-sm-8 col-md-6 text-center">
          Laboratorium Rekayasa Perangkat Lunak <br>
          <small>Fakultas Ilmu Komputer Universitas Jember</small><br>
          <small>2020</small>
        </div>
      </div>
    </div>
    <!--content end -->
    <script type="text/javascript">
      function scrollToTop() {
        window.scrollTo({
          top: 1000,
          behavior: 'smooth'
        });
        }
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
