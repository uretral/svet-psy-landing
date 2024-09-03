<!doctype html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
{{--        @vite(['resources/css/app.less','resources/js/app.js'])--}}
    <link rel="stylesheet" href="/build/assets/app-Ciu2Gu0x.css">
    <script src="/build/assets/app-CokpbQL5.js"></script>


    <link rel="icon" type="image/png" sizes="32x32" href="favicon.ico">

    <title>{{ config('app.name') }}: Международный конгресс специалистов, работающих с травмой </title>

</head>

<body @if(isset($bodyClass)) class="{{$bodyClass}} @if(request()->has('tpl') && request('tpl') == 1) tpl @endif" @endif>

<x-header class="header">

    <a href="javascript:" class="header-logo">
        <img src="{{ asset('img/logo.png')  }}" alt="logo"/>

    </a>
    <div class="header-menu">
        <a href="#tasks">О конгрессе</a>
        <a href="#options">Варианты участия</a>
        <a href="#address">Место проведения</a>
    </div>

</x-header>

@yield('main')

<x-footer>
    <div class="footer-menu">
        <h2>КОНТАКТЫ</h2>
        <a href="#tasks">О конгрессе</a>
        <a href="#options">Варианты участия</a>
        <a href="#address">Место проведения</a>
    </div>
    <div class="footer-contacts">
        <a class="tel" href="tel:+7 (901) 634-50-60">+7 (901) 634-50-60</a>
        <a class="mailto" href="mailto:zhipt@yandex.ru">zhipt@yandex.ru</a>
    </div>
    <div class="footer-policy">
        <div class="footer-socials">
            <a class="tg-tr" target="_blank" href="https://t.me/ZhiPT_2024"></a>
            <a class="tg-w" target="_blank" href="https://wa.me/79016345060"></a>
            <a class="vk" target="_blank" href="https://vk.com/zhipt"></a>
            <a class="rutube" target="_blank" href="https://rutube.ru/channel/38741569/"></a>
        </div>
        <a href="https://brendid.getcourse.ru/oferta_kongress">Публичная оферта</a>
        <a href="https://brendid.getcourse.ru/PD">Политика конфиденциальности</a>
    </div>

</x-footer>

</body>
</html>