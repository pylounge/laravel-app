<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ $title ?? 'Laravel' }}</title>
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <header>
        <div class="title">Web-программирование</div>
        <nav>
            <ul>
                <li>
                    <a href="{{ route('index') }}">Главная</a>
                </li>
                   <li>
                       <a href="{{ route('contacts') }}">Контакты</a>
                   </li>
                   <li style="flex-grow:1;"></li>
                   @auth
                   <li>
                    <a href="{{ route('home') }}">Личный кабинет</a>
                   </li>
                  <li>
                    <a  href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                     {{ __('Logout') }}
                 </a>

                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                     @csrf
                 </form>
                    </li>
                   @endauth
                   @guest
                   <li>
                    <a href="{{ route('login') }}">Вход</a>
                   </li>
                   <li>
                    <a href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                   @endguest
            </ul>
        </nav>
    </header>
    <main>
        <aside>Боковая панель</aside>
        <section>
    <body>
        @yield('content')
    </section>
</main>
<footer>
    &copy; ЕГУ
</footer>
        <script src="{{ asset('js/manifest.js') }}"></script>
        <script src="{{ asset('js/vendor.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
