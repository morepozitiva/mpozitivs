@extends('blocks.maine')
@section('title', 'Позитивчик')

@section('content')
                <div id="home">
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
               <!--  <div class="row">
                    @foreach ($castles as $castle)
                    <div class="colls works"><img src="{{$castle->patchimgh}}" data-toggle="tooltip" title="{{ $castle->titleimg }} <br/> <div class='linksp'>{!! $castle->contenth !!}</div>"></div>
                    @endforeach
                </div> -->
<div class="castle">
 @foreach ($castles as $castle)
<div class="card" style="width: 18rem;">
   
  <img src="{{$castle->patchimgh}}" class="card-img-top" alt="...">
  <div class="card-body">
    <!-- <h5 class="card-title"  data-toggle="collapse" data-target="#collapseExample" >Описание работы</h5> -->
    
  <p>{{ $castle->titleimg }}</p></div>
    <div class="linksp">{!! $castle->contenth !!}</div>
  </div>
 @endforeach
</div>
            </div>
@endsection
