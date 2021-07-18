<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7987767ab5.js" crossorigin="anonymous"></script>

    <!-- Date -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .notif-rent
        {
            font-size: 13px;
            background-color: red;
            color: #fff;
            border-radius: 20%;
        }
        .notif-garage
        {
            font-size: 13px;
            background-color: rgb(0, 175, 29);
            color: #fff;
            border-radius: 20%;
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ url('img/logo-img.png') }}" width="50px" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}"><i class="fa fa-home"></i> Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('product') }}"><i class="fa fa-car"></i> Mobil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}"><i class="fa fa-sign-in-alt"></i> {{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}"><i class="fa fa-registered"></i> {{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('home') }}"><i class="fa fa-home"></i> Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('car') }}"><i class="fa fa-car"></i> Mobil</a>
                        </li>
                        <li class="nav-item">
                            <?php
                                $garage = \App\Order::where('id_user', Auth::user()->id)->where('status_order', 1)->first();
                                if (!empty($garage))
                                {
                                    $notif_garage = \App\OrderDetail::where('id_order', $garage->id)->count();
                                }
                                else
                                {
                                    $notif_garage = '0';
                                }
                            ?>
                            <a class="nav-link" href="{{ url('garage') }}"><i class="fa fa-warehouse"></i> Garasi <span class="badge notif-garage">{{ $notif_garage }}</span></a>
                        </li>
                        <li class="nav-item">
                            <?php
                                $order = \App\Order::where('id_user', Auth::user()->id)->where('status_order', 0)->first();
                                if (!empty($order))
                                {
                                    $notif_order = \App\OrderDetail::where('id_order', $order->id)->count();
                                }
                                else
                                {
                                    $notif_order = '0';
                                }
                            ?>
                            <a class="nav-link" href="{{ url('rent') }}"><i class="fa fa-archive"></i> Penyewaan <span class="badge notif-rent">{{ $notif_order }}</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" v-pre>
                                <i class="fa fa-user"></i> {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" href="{{ url('profile') }}">Profil</a>
                                    <a class="dropdown-item" href="{{ url('history') }}">Riwayat Penyewaan</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endguest
                </ul>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
    @include('sweetalert::alert')
</body>
</html>
