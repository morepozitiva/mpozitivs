@extends('blocks.maine')
@section('title', 'Чуток о себе')
@section('name')
Обо мне
@endsection
@section('zagolovok')
Совсем чуток о себе
@endsection

@section('about')
    <h2 class="wow zoomIn" data-wow-duration="2s" data-wow-delay=".5s" data-wow-offset="10">@yield('zagolovok')</h2>
    

    <p class="abouttext wow zoomIn" data-wow-duration="2s" data-wow-delay=".5s" data-wow-offset="10">Занимаюсь разработкой сайтов. Имеется большой багаж знаний в области разработки сайтов разной сложности (сайт визитка, корпоративный сайт и т.п.). Мне повезло, я люблю свою работу — мне нравится создавать сайты и не только их.</p>

    <!-- naviki -->
    <div class="wrapper2" style="clear: both;padding-left: 10px;">
        <!--  -->
    <div class="skillbar clearfix " data-percent="95%">
        <div class="skillbar-title" style="background: #d35400;"><span>HTML5</span></div>
        <div class="skillbar-bar" style="background: #e67e22;"></div>
        <div class="skill-bar-percent Count">95</div>
    </div> <!-- End Skill Bar -->

    <div class="skillbar clearfix " data-percent="85%">
        <div class="skillbar-title" style="background: #2980b9;"><span>CSS3</span></div>
        <div class="skillbar-bar" style="background: #3498db;"></div>
        <div class="skill-bar-percent Count">95</div>
    </div> <!-- End Skill Bar -->

    <div class="skillbar clearfix " data-percent="40%">
        <div class="skillbar-title" style="background: #2c3e50;"><span>jQuery</span></div>
        <div class="skillbar-bar" style="background: #2c3e50;"></div>
        <div class="skill-bar-percent Count">40</div>
    </div> <!-- End Skill Bar -->

    <div class="skillbar clearfix " data-percent="30%">
        <div class="skillbar-title" style="background: #46465e;"><span>PHP</span></div>
        <div class="skillbar-bar" style="background: #5a68a5;"></div>
        <div class="skill-bar-percent Count">30</div>
    </div> <!-- End Skill Bar -->

    <div class="skillbar clearfix " data-percent="45%">
        <div class="skillbar-title" style="background: #333333;"><span>Wordpress</span></div>
        <div class="skillbar-bar" style="background: #525252;"></div>
        <div class="skill-bar-percent Count">65</div>
    </div> <!-- End Skill Bar -->

    <div class="skillbar clearfix " data-percent="40%">
        <div class="skillbar-title" style="background: #124e8c;"><span>Photoshop</span></div>
        <div class="skillbar-bar" style="background: #4288d0;"></div>
        <div class="skill-bar-percent Count">50</div>
    </div> <!-- End Skill Bar -->
<!-- -->    
</div>    
    <!-- naviki -->

    <h2 class="wow zoomIn" data-wow-duration="2s" data-wow-delay=".5s" data-wow-offset="10">Использую</h2>
        <div class="wrapper" style="clear: both;"> <div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
    </div>

@endsection