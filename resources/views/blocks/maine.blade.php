<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('blocks.head')
<body id="fon">
@include('blocks.header')

<maine class="maine">
    <section class="home">
    @yield('home')
    {{-- @include('pages.castle') --}}
    </section>
    <section class="works">
    @yield('works')
    </section>
    <section class="about">
    @yield('about')
    {{-- @include('pages.about') --}}
    </section>
     {{-- @include('pages.castle')  --}}  
    
    
</maine>
<footer class="footer">
    <p>Создано с любовью morepozitiva!!!!&nbsp; {{ date('Y') }}</p>
</footer>
</body>
@include('blocks.scripts')
</html>