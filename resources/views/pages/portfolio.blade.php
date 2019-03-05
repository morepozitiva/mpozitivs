@extends('blocks.maine')
@section('title', 'Портфолио')
@section('name')
Портфолио
@endsection

@section('works')

    <div class="title m-b-md">
                    То что сделано!!!
    </div>
<div class="castle">
 @foreach ($portfolios as $portfolio)
<div class="card wow zoomIn" data-wow-duration="2s" data-wow-delay=".5s" data-wow-offset="10" style="width: 16rem;">
   
  <img src="{{$portfolio->patchimg}}" class="card-img-top" alt="">
  <div class="card-body">
   {{--  <h2>Описание работы</h2> --}}
    {{-- <a href="#clickme">Описание работы</a> --}}
    <!-- <h5 class="card-title"  data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Описание работы</h5> -->    
  {{-- <p>{{ $portfolio->title }}</p> --}}
<div class="holder">
<div class="block">
{{ $portfolio->title }}

<div class="linksp">{!! $portfolio->contents !!}</div>
</div></div>

    {{--  --}}
</div>
    
  {{-- end page portfolio --}}

</div> 
 @endforeach
</div>
@endsection