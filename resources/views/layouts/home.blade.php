<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title }} - App Blog</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('assets/style/style.css') }}">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ url('assets/vendors/bootstrap/bootstrap.css') }}" />

</head>

<body>
    <div id="home">
        <nav class="navbar navbar-expand-md navbar-light fixed-top shadow-sm ">
            <div class="container justify-content-center">
                <a class="navbar-brand text-white" href="{{ url('/') }}">
                    Blog Kuliner
                </a>
                <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav">
                        <li class="nav-item d-flex">
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Pilih Kategori
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ route('home') }}" class="dropdown-item">Semua
                                            Kategori</a></li>
                                    <li>
                                        @foreach ($provinces as $province)
                                            <a class="dropdown-item"
                                                href="{{ route('artikel.provinsi', $province->slug) }}">{{ $province->name }}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>

        <div class="container">
            <main class="py-4 row justify-content-center">
                <div class="col-md-8">
                    @yield('content')
                </div>
            </main>
        </div>
    </div>

    <script src="{{ url('assets/vendors/bootstrap/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
