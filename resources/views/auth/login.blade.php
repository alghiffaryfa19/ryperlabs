<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('rpl/login_style.css')}}">

    <title>Login - RyperLabs</title>
  </head>
  <body>
    <div class="container-fluid login-warp">
      <!-- header box -->
      <div class="row justify-content-center">
        <div class="header-box col-10 col-sm-9 col-md-7">
          <div class="row no-gutters">
            <img src="img/LOGO RPL HIGH RES.png" class="logo" alt="">
            <h1 class="logo-text col-8">RYPER LAB</h1>
          </div>
        </div>
      </div>
      <!-- end header box -->
      <!-- login box -->
      <div class="row justify-content-center">
        <div class="login-box col-10 col-sm-9 col-md-7">
          <h1>LOGIN</h1>
          <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
              <label for="inputUsername">Email atau NIM</label>
              <input id="username" type="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required  autofocus>
                           
                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>
            <div class="form-group">
              <label for="inputPassword">Password</label>
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>
            <button type="submit" class="btn btn-outline-light btn-masuk">Masuk</button>
            <small>Belum punya akun? <a href="{{route('daftar')}}">Daftar disini</a></small>
          </form>
        </div>
      </div>
      <!-- end login box -->
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
