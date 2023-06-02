<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title></title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('assets/style/style.css') }}">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    {{-- BOXICON --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

    <link rel="stylesheet" href="{{ url('assets/vendors/bootstrap/bootstrap.css') }}" />
</head>

<body>
    <div id="side">
        <div class="sidebar mt-0">
            <h2 class="text-white text-center pt-2 container">Blog Kuliner</h2>
            <hr class="text-white border-2 opacity-100">
            <ul>
                <li class="nav-item"><a href="{{ route('dashboard') }}" class="nav-link "><i
                            class='bx bxs-dashboard me-2'></i>Dashboard</a></li>
                <li class="nav-item"><a href="{{ route('provinsi.index') }}" class="nav-link "><i
                            class='bx bx-current-location me-2'></i>Province</a></li>
                <li class="nav-item"><a href="{{ route('artikel.index') }}" class="nav-link "><i
                            class='bx bx-news me-2'></i>Articles</a></li>
                <li class="nav-item"><a href="{{ route('home') }}" class="nav-link"><i
                            class='bx bx-home me-2'></i>Homepage</a></li>
            </ul>

            <ul class="user-button navbar-nav ms-auto mb-lg-0">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}"><i
                                    class='bx bx-log-in me-2'></i>{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}"><i
                                    class='bx bx-registered me-2'></i>{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <i class='bx bx-user me-2'></i>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="logout dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class=" dropdown-item " href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                <i class='bx bx-log-out'></i>
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>


        </div>
        <div class="content">
            <div class="container mt-4">
                <main class="py-4 row justify-content-center">
                    <div class="col-md-11">
                        @yield('content')
                    </div>
                </main>
            </div>
        </div>
    </div>
    <script src="{{ url('assets/vendors/bootstrap/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
