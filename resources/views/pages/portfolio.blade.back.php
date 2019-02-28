@extends('blocks.maine')
@section('title', 'Портфолио')
@section('name', 'Портфолио')

@section('content')

<div id="portfolio">
    <div class="title m-b-md">
                    То что сделано!!!
    </div>
<div class="row">
    @foreach ($portfolios as $portfolio)
<div class="colls works wow zoomIn" data-wow-duration="2s" data-wow-delay=".5s" data-wow-offset="10">

<img data-toggle="tooltip" src="{{ $portfolio->patchimg }}" title="{{ $portfolio->title }} <br/> <div class='linksp'>{!! $portfolio->contents !!}</div>">

</div>
    @endforeach
</div>
</div>
@endsection