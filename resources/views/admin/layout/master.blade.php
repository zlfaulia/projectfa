<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shop | Dashboard</title>
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/overlayScrollbars/css/OverlayScrollbars.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/adminlte.min.css') }}" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic" />

    <link rel="stylesheet" href="{{ asset('css/admin_custom.css') }}" />

    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
</head>

<body class="sidebar-mini">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#">
                        <i class="fas fa-bars"></i>
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown user-menu">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                        <img src="https://picsum.photos/300/300" class="user-image img-circle elevation-2"
                            alt="hallo" />
                        <span class="d-none d-md-inline">
                            hallo
                        </span>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <li class="user-header bg-primary">
                            <img src="https://picsum.photos/300/300" class="img-circle elevation-2" alt="hallo" />
                            <p class="">
                                hallo
                                <small>That&#039;s a nice guy</small>
                            </p>
                        </li>

                        <li class="user-footer">
                            <a href="http://127.0.0.1:8000/profile/username" class="btn btn-default btn-flat">
                                <i class="fa fa-fw fa-user text-lightblue"></i>
                                Profile
                            </a>
                            <a class="btn btn-default btn-flat float-right" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                                <i class="fa fa-fw fa-power-off text-red"></i> Logout</a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>

                        </li>
                    </ul>
                </li>
            </ul>
        </nav>

        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="{{ url('home') }}" class="brand-link">
                <img src="https://i.ibb.co/ZhNc6LG/logo-nelba.jpg" alt="AdminLTE"
                    class="brand-image img-circle elevation-3" style="opacity: 0.8;" />

                <span class="brand-text font-weight-light">
                    <b>Nelba Konveksi</b>
                </span>
            </a>

            <div class="sidebar">
                <nav class="pt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ url('home') }}">
                                <i class="nav-icon fas fa-fw fa-home"></i>

                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        @if (Auth::user()->role == 'admin')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/admin/galeri') }}">
                                    <i class="nav-icon fas fa-fw fa-image"></i>

                                    <p>
                                        Galeri1
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/admin/produk') }}">
                                    <i class="nav-icon fas fa-fw fa-tshirt"></i>

                                    <p>
                                        Produk
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/admin/stok') }}">
                                    <i class="nav-icon fas fa-fw fa-folder-plus"></i>

                                    <p>
                                        Stok
                                    </p>
                                </a>
                            </li>

                            <li class="nav-header">
                                Transaksi
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/admin/pesanan') }}">
                                    <i class="nav-icon fas fa-fw fa-cart-arrow-down"></i>

                                    <p>
                                        Pesanan
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/admin/customDesain') }}">
                                    <i class="nav-icon fas fa-fw fa-pen-nib"></i>

                                    <p>
                                        Custom Desain
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('admin/pembayaran') }}">
                                    <i class="nav-icon fas fa-fw fa-dollar-sign"></i>

                                    <p>
                                        Pembayaran
                                    </p>
                                </a>
                            </li>

                            <li class="nav-header">
                                Laporan
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/admin/laporanModal') }}">
                                    <i class="nav-icon fas fa-fw fa-layer-group"></i>

                                    <p>
                                        Modal
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/penjualan') }}">
                                    <i class="nav-icon fas fa-fw fa-file-invoice-dollar"></i>

                                    <p>
                                        Penjualan
                                    </p>
                                </a>
                            </li>

                            <li class="nav-header">
                                Akun
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/admin/user') }}">
                                    <i class="nav-icon fas fa-fw fa-user"></i>

                                    <p>
                                        User
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/') }}">
                                    <i class="nav-icon fas fa-fw fa-home"></i>

                                    <p>
                                        Homepage
                                    </p>
                                </a>
                            </li>
                        @endif
                    </ul>
                </nav>
            </div>
        </aside>

        <div class="content-wrapper">
            @yield('content')
        </div>
    </div>

    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>

    <script src="{{ asset('vendor/adminlte/dist/js/adminlte.min.js') }}"></script>

    <script>
        console.log("Hi!");
    </script>
</body>

</html>
