<header id="header" class="mb-3">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="{{route('home')}}">Index</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="{{request()->routeIs('home') ? 'active' : ''}}" href="{{route('home')}}">Inicio</a>
            {{-- @dump(request()->routeIs('home')); --}}
          </li>
          
          {{-- si alguno de los <li> hijos está activo, también agregar la clase 'active' al li padre --}}
          {{-- se podría hacer con condicional ternario --}}
          <li class="dropdown"><a class="@if(request()->routeIs('cursos.*')) active @endif" href="#"><span>Cursos</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              {{-- <li><a class="{{request()->routeIs('cursos.index') ? 'active' : ''}}" href="{{route('cursos.index')}}">Ver todos</a></li> --}}
              <li><a class="{{request()->routeIs('cursos.index') ? 'active' : ''}}" href="{{route('cursos.index')}}">Ver todos</a></li>
              <li><a class="{{request()->routeIs('cursos.create') ? 'active' : ''}}" href="{{route('cursos.create')}}">Crear curso</a></li>
            </ul>
          </li>

          <li><a class="{{request()->routeIs('about') ? 'active' : ''}}" href="{{route('about')}}">Nosotros</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="{{route('contact.index')}}" class="get-started-btn">Contacto</a>

    </div>
</header><!-- End Header -->