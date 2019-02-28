<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="generator" content="Laravel">
    <title>@yield('title', 'Позитивчик')</title>
    <meta name="description" content="@yield('description', 'Здравствуйте! Я Мироненко Александр. Занимаюсь разработкой ')">
    @include('blocks.styles')
</head>