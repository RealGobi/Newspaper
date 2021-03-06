<!doctype html>
<html lang="eng">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ludis Nuntium</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{asset('scss/style.css')}}" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="user">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <div class="logout">
                <a class="logout-a" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                @can('superUsers-only')
                <a class="logout-a" href="/Newspaper/newspaper/public/create">

                    Add article
                </a>
                @endcan



                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
            @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </div>

        @endif

        <div class="headermenu">

            <div class="title m-b-md">
                <a style="text-decoration: none;" href="/Newspaper/newspaper/public/">Ludis Nuntium</a>
            </div>

            <div class="links">
                <a href="/Newspaper/newspaper/public/quidditch">Quidditch </a>|
                <a href="/Newspaper/newspaper/public/lightsaber">Lightsaber Fencing </a>|
                <a href="/Newspaper/newspaper/public/dejarik">Dejarik </a>|
                <a href="/Newspaper/newspaper/public/anboJitsu">Anbo-Jitsu </a>|
                <a href="/Newspaper/newspaper/public/blernsball">Blernsball </a>|
                <a href="/Newspaper/newspaper/public/dragonDressage">Dragon Dressage </a>|
                <a href="/Newspaper/newspaper/public/fotBoule">Fot-Boule </a>|
                <a href="/Newspaper/newspaper/public/sewerSurfin">Sewer Surfin </a>
            </div>
        </div>

</body>

</html>