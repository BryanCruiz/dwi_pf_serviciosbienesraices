<header class="p-3 bg-success text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        </a>

        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-decoration-none" style="color: #FECD1A;">
            <img src="/images/SBR.jpg" alt="Logo" height="32" class="me-2">
          </a>
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        @auth

          <li><a href="{{ route('home.index') }}" class="nav-link px-2 text-white">HOME</a></li>
          <li><a href="{{ route('properties.index') }}" class="nav-link px-2 text-white">PROPERTIES</a></li>
          <li><a href="{{ route('categories.index') }}" class="nav-link px-2 text-white">CATEGORIES</a></li>
        </ul>
        @endauth



        @auth
          {{auth()->user()->name}}
          <div class="text-end">
            <a href="{{ route('logout.perform') }}" class="btn btn-outline-light me-2">Salir</a>
          </div>
        @endauth

        @guest
          <div class="text-end">
            <a href="{{ route('login.perform') }}" class="btn btn-primary">Iniciar sesión</a>
            <a href="{{ route('register.perform') }}" class="btn btn-outline-light me-2">Registrar</a>
          </div>
        @endguest
      </div>
    </div>
  </header>
