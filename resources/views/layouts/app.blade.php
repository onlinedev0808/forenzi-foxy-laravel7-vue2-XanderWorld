<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta
        content="width=device-width, initial-scale=1"
        name="viewport"
    >

    <!-- CSRF Token -->
    <meta
        content="{{ csrf_token() }}"
        name="csrf-token"
    >

    <title>
        Foxy
        {{-- {{ config('app.name', 'Foxy') }} --}}
    </title>

    <!-- Scripts -->
    <script
        src="{{ asset('js/app.js') }}"
        defer
    ></script>

    <!-- Fonts -->
    <link
        href="//fonts.gstatic.com"
        rel="dns-prefetch"
    >
    <link
        href="https://fonts.googleapis.com/css?family=Nunito"
        rel="stylesheet"
    >

    <!-- Styles -->
    <link
        href="{{ asset('css/app.css') }}"
        rel="stylesheet"
    >
</head>

<body>
    <div id="app">
        <nav class="HeaderTop navbar navbar-expand-md navbar shadow-sm">
            <div class="container">
                <a
                    class="navbar-brand"
                    href="{{ url('/') }}"
                >
                    Foxy
                    {{-- {{ config('app.name', 'Foxy') }} --}}
                </a>
                <button
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}"
                    class="navbar-toggler"
                    data-target="#navbarSupportedContent"
                    data-toggle="collapse"
                    type="button"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div
                    class="collapse navbar-collapse"
                    id="navbarSupportedContent"
                >
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                        @guest
                        @else
                            <li class="nav-item dropdown mx-1">
                                <a
                                    aria-expanded="false"
                                    aria-haspopup="true"
                                    class="nav-link dropdown-toggle"
                                    data-toggle="dropdown"
                                    href="#"
                                    id="navbarDropdown"
                                    role="button"
                                >
                                    Users
                                </a>
                                <div
                                    aria-labelledby="navbarDropdown"
                                    class="dropdown-menu"
                                >
                                    <a
                                        class="dropdown-item"
                                        href="{{ route('admin.users.index') }}"
                                    >View All Users</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown mx-1">

                                <a
                                    aria-expanded="false"
                                    aria-haspopup="true"
                                    class="nav-link dropdown-toggle"
                                    data-toggle="dropdown"
                                    href="#"
                                    id="navbarDropdown"
                                    role="button"
                                >
                                    Products
                                </a>
                                <div
                                    aria-labelledby="navbarDropdown"
                                    class="dropdown-menu"
                                >
                                    <a
                                        class="dropdown-item"
                                        href="{{ route('admin.products.index') }}"
                                    >View All Products</a>
                                    <a
                                        class="dropdown-item"
                                        href="{{ route('admin.products.create') }}"
                                    >Add New Product</a>
                                </div>
                            </li>

                            <li class="nav-item dropdown mx-1">
                                <a
                                    aria-expanded="false"
                                    aria-haspopup="true"
                                    class="nav-link dropdown-toggle"
                                    data-toggle="dropdown"
                                    href="#"
                                    id="navbarDropdown"
                                    role="button"
                                >
                                    Orders
                                </a>
                                <div
                                    aria-labelledby="navbarDropdown"
                                    class="dropdown-menu"
                                >
                                    <a
                                        class="dropdown-item"
                                        href="{{ route('admin.orders.index') }}"
                                    >View All Orders</a>
                                </div>
                            </li>

                            <li class="nav-item dropdown mx-1">
                                <a
                                    aria-expanded="false"
                                    aria-haspopup="true"
                                    class="nav-link dropdown-toggle"
                                    data-toggle="dropdown"
                                    href="#"
                                    id="navbarDropdown"
                                    role="button"
                                >
                                    Payments
                                </a>
                                <div
                                    aria-labelledby="navbarDropdown"
                                    class="dropdown-menu"
                                >
                                    <a
                                        class="dropdown-item"
                                        href="{{ route('admin.payments.index') }}"
                                    >View All Payments</a>
                                    <a
                                        class="dropdown-item"
                                        href="{{ route('admin.payments.create') }}"
                                    >Add New Payment</a>
                                </div>
                            </li>

                        @endguest
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a
                                    class="nav-link"
                                    href="{{ route('login') }}"
                                >{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a
                                        class="nav-link"
                                        href="{{ route('register') }}"
                                    >{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a
                                    aria-expanded="false"
                                    aria-haspopup="true"
                                    class="nav-link dropdown-toggle"
                                    data-toggle="dropdown"
                                    href="#"
                                    id="navbarDropdown"
                                    role="button"
                                    v-pre
                                >
                                    {{ Auth::user()->name }}
                                </a>

                                <div
                                    aria-labelledby="navbarDropdown"
                                    class="dropdown-menu dropdown-menu-right"
                                >
                                    <a
                                        class="dropdown-item"
                                        href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                                    >
                                        {{ __('Logout') }}
                                    </a>

                                    <form
                                        action="{{ route('logout') }}"
                                        class="d-none"
                                        id="logout-form"
                                        method="POST"
                                    >
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
