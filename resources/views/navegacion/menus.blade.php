
  @guest
 
  @else 
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Catalogos
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
    <a class="dropdown-item" href="{!! route('carreras') !!}">Carreras</a>
    <a class="dropdown-item" href="{!! route('area') !!}">Areas</a>
    <a class="dropdown-item" href="{!! route('estudiantes') !!}">Estudiantes</a>
    </div>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Actividades
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
    <a class="dropdown-item" href="{!! route('roles') !!}">Roles semanales
    </a>
    </div>
  </li>
 
  @endguest
  