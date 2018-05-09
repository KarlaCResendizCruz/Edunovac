<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('img/logon.png')}}"></a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{url('/')}}">Inicio</a></li>
        <li><a href="{{url('/programa-educativo')}}">Programa Educativo</a></li>
        <li><a href="{{url('/nuestras-apps')}}">Nuestras Apps</a></li>
        <li><a href="{{url('/#contacto')}}">Contacto</a></li>
      </ul>
    </div>
  </div>
</nav>