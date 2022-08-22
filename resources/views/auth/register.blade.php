<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | REGISTER</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->

    <link rel="stylesheet" href="{{ asset('template/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('template/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('template/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('FE/css/util.css') }}" />
    <link rel="stylesheet" href="{{ asset('FE/css/main.css') }}" />

</head>

<body class="register-page" style="background-color: rgb(35, 108, 192)">
    <div class="register-box">
        <div class="register-logo">
            <a href="#"><img src="https://i.ibb.co/12P9pbJ/logore.png" style="padding-left: 80px; width:90%">
            </a>
        </div>

        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">REGISTER</p>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="input-group mb-3">
                        <input id="name" type="text" placeholder="Full name"
                            class="form-control @error('name') is-invalid @enderror" name="name"
                            value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        {{-- <input type="text" class="form-control" placeholder="Full name"> --}}
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    {{-- end name --}}
                    <div class="input-group mb-3">
                        {{-- <input type="email" class="form-control" placeholder="Email"> --}}
                        <input id="email" type="email" placeholder="Email"
                            class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    {{-- end email --}}

                    <div class="input-group mb-3">
                        <input id="no_telepon" type="text" placeholder="No Telepon/WA"
                            class="form-control @error('no_telepon') is-invalid @enderror" name="no_telepon"
                            value="{{ old('No Telepon/WA') }}" required autocomplete="no_telepon" autofocus>

                        @error('no_telepon')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        {{-- <input type="text" class="form-control" placeholder="Full name"> --}}
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-phone"></span>
                            </div>
                        </div>
                    </div>
                    {{-- end no telepon --}}

                    <div class="input-group mb-3">
                        {{-- <input type="email" class="form-control" placeholder="Email"> --}}
                        <input type="text" name="alamat" placeholder="masukkan alamat" class="form-control">

                        @error('alamat')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-home"></span>
                            </div>
                        </div>
                    </div>
                    {{-- end alamat --}}
                    <div class="input-group mb-3">
                        <input id="foto" type="file" placeholder="Pilih Foto"
                            class="form-control @error('foto') is-invalid @enderror" name="foto" required
                            autocomplete="foto">

                        @error('foto')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-images"></span>
                            </div>
                        </div>
                    </div>
                    {{-- end alamat --}}

                    <div class="input-group mb-3">
                        {{-- <input type="password" class="form-control" placeholder="Password"> --}}
                        <input id="password" type="password" placeholder="Password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input id="password-confirm" type="password" placeholder="Retype password"
                            class="form-control" name="password_confirmation" required autocomplete="new-password">
                        {{-- <input type="password" class="form-control" placeholder="Retype password"> --}}
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    {{-- end telepon --}}
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                                <label for="agreeTerms">
                                    I agree to the <a href="#">terms</a>
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">
                                {{ __('Register') }}
                            </button>
                            {{-- <button type="submit" class="btn btn-primary btn-block">Register</button> --}}
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                {{-- <div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i>
          Sign up using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i>
          Sign up using Google+
        </a>
      </div> --}}

                {{-- <a href="login.html" class="text-center">I already have a membership</a> --}}
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->

    <!-- jQuery -->
    <script src="{{ asset('template/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('template/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('template/dist/js/adminlte.min.js') }}"></script>
</body>

</html>
