@extends('blocks.maine')
@section('title', 'Позитивчик')
@section('home')
<p class="sometext"> Всегда, есть что-то новое, и интересное! Вот и сейчас, очень интересно, новый взгляд, новое все. Да не все получается, но впереди столько интересного, что, аж ДУХ ЗАХВАТЫВАЕТ</p>
                <hr>
                <div class="links">
                    <a href="//morepozitiva.github.io" target="_blank">Мой сайт</a>
                    <a href="//github.com/morepozitiva" target="_blank">Мой ГИТ</a>
                    <a href="//codepen.io/morepozitiva/" target="_blank">Песочница</a> 
                    <a href="//github.com/laravel/laravel">GitHub Laravel</a>
                </div>
                <hr>
                <div class="titlep m-p-md">
                    Некоторые работы
                </div>             
<div class="castle">
 @foreach ($castles as $castle)
<div class="card" style="width: 18rem;">
   
  <img src="{{$castle->patchimgh}}" class="card-img-top" alt="...">
  <div class="card-body">  
  <p>{{ $castle->titleimg }}</p></div>
    <div class="linksp">{!! $castle->contenth !!}</div>
  </div>
 @endforeach
</div>
{{-- <div class="castle">
  <div class="col-sm mys"><h2><i class="fas fa-building"></i>&nbsp;Разработка сайтов</h2></div>
  <div class="col-sm mys"><h2><i class="fas fa-font"></i>&nbsp;Наполнение и поддержка</h2></div>
  <div class="col-sm"></div>
</div>  --}}   
@endsection             