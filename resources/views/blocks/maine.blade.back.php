<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('blocks.head')
<body id="fon">
@include('blocks.header')

<maine class="maine">
    @yield('content')
</maine>
<footer class="footer">
    <p>Создано с любовью morepozitiva!!!!&nbsp; {{ date('Y') }}</p>

</footer>
</body>
@include('blocks.scripts')
</html>