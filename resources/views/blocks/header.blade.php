<header>
  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{secure_url('/')}}">Позитивчик))))<img  src="{{ secure_asset('images/happy.png') }}" class="hnavim" alt="" ></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="{{secure_url('/')}}" data-go-to="home"><i class="fas fa-home"></i></a>      
      <a class="nav-item nav-link" href="{{secure_url('portfolio')}}" data-go-to="works">Портфолио</a>
      <a class="nav-item nav-link" href="{{secure_url('about')}}" data-go-to="about">Кто я</a>
      <!-- <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a> -->
    </div>
  </div>
</nav>
</header>