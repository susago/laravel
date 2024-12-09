<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <style>
    .active {
        color: 
    }
    </style>
</head>
<body>
    <ul>
        <li><a class="{{request()->routeIs('home') ? 'active' : ''}}" href="/">@lang('home')</a></li>
        <li><a class="{{request()->routeIs('about') ? 'active' : ''}}" href="/about">@lang('About')</a></li>
        <li><a class ="{{request()->routeIs('contact') ? 'active' : ''}}" href="/contact">@lang('contact')</a></li>
        <li><a class ="{{request()->routeIs('portfolio') ? 'active' : ''}}" href="/portfolio">{{__('portfolio')}}</a></li>
    </ul>

    @yield('content')
</body>
</html>