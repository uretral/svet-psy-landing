<!doctype html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.less','resources/assets/js/app.js'])

    {{--    <link rel="apple-touch-icon" sizes="180x180" href="{{ vite::asset('Modules/My/Resources/assets/img/favicon/apple-touch-icon.png')}}">--}}
    {{--    <link rel="icon" type="image/png" sizes="32x32" href="{{ vite::asset('Modules/My/Resources/assets/img/favicon/favicon-32x32.png')}}">--}}
    {{--    <link rel="icon" type="image/png" sizes="16x16" href="{{ vite::asset('Modules/My/Resources/assets/img/favicon/favicon-16x16.png')}}">--}}
    {{--    <link rel="manifest" href="{{ vite::asset('Modules/My/Resources/assets/img/favicon/site.webmanifest')}}">--}}
    {{--    <link rel="mask-icon" href="{{ vite::asset('Modules/My/Resources/assets/img/favicon/safari-pinned-tab.svg')}}" color="#5bbad5">--}}

    <title>{{ config('app.name') }}: @yield('title')</title>

</head>

<body @if(isset($bodyClass)) class="{{$bodyClass}} @if(request()->has('tpl') && request('tpl') == 1) tpl @endif" @endif>

<x-header class="header">

    <a href="javascript:" class="header-logo">
        <img src="{{ Vite::image('logo.png')  }}" alt="logo"/>

    </a>
    <div class="header-menu">
        <a href="javascript:">о конференции</a>
        <a href="javascript:">варианты участия</a>
        <a href="javascript:">место проведения</a>
    </div>

</x-header>

@yield('main')

<x-footer>
    <div class="footer-menu">
        <h2>КОНТАКТЫ</h2>
        <a href="javascript:">О конгрессе</a>
        <a href="javascript:">Варианты участия</a>
        <a href="javascript:">Место проведения</a>
    </div>
    <div class="footer-contacts">
        <a class="tel" href="tel:+7 (901) 634-50-60">+7 (901) 634-50-60</a>
        <a class="mailto" href="mailto:zhipt@yandex.ru">zhipt@yandex.ru</a>
    </div>
    <div class="footer-policy">
        <div class="footer-socials">
            <a class="tg-tr" href="javascript:"></a>
            <a class="tg-w" href="javascript:"></a>
            <a class="vk" href="javascript:"></a>
        </div>
        <a href="javascript:">Публичная оферта</a>
        <a href="javascript:">Политика конфиденциальности</a>
    </div>

</x-footer>

{{--<livewire:my::global-events-listener/>--}}
{{--@livewireScriptConfig--}}

</body>
</html>