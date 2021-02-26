<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title ?? 'Laravel' }}</title>

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
