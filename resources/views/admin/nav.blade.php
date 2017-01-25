<ul id="user_options" class="dropdown-content">
  <li><a href="#!">Perfil</a></li>
  <li class="divider"></li>
  <li><a href="{{ route('logout') }}">Salir</a></li>
</ul>
<nav>
  <div class="nav-wrapper blue darken-1">
    <div class="container">
      <a href="" class="brand-logo mt-5"><img class="responsive-img" width="150px" src="{{asset('images/Logo_Blanco.svg')}}"></a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="{{ route('admin.inicio') }}">Inicio</a></li>
        <li><a href="{{ route('admin.usuarios.index') }}">Usuarios</a></li>
        <li><a href="">Galería</a></li>
        <li><a class="dropdown-button" href="#!" data-activates="user_options">Jaime Rodriguez<i class="material-icons right">arrow_drop_down</i></a></li>
      </ul>
    </div>
    <ul class="center-align side-nav" id="mobile-demo">
      <div class="row mb-0">
        <div class="col s10 col-center mt-30">
          <a href="">
            <img class="responsive-img" src="{{asset('images/Logo.svg')}}">
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col s8 col-center divider"></div>
      </div>
      <li><a href="{{ route('admin.inicio') }}">Inicio</a></li>
      <li><a href="{{ route('admin.usuarios.index') }}">Usuarios</a></li>
      <li><a href="">Galería</a></li>
    </ul>
  </div>
</nav>