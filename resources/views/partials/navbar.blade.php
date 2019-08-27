<body>
  <nav class="navbar navbar-expand-md navbar-light bg-light shadow-sm">
    <a class="navbar-brand" href="{{ url('/') }}"><img src="{{asset('/img/Trading-Post-logo-small.jpg')}}" alt="logotipo" class="navbar-brand" width="100px" height="75px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <script src="https://kit.fontawesome.com/42c3671e30.js"></script>
      <div class="container">
          <div class="collapse navbar-collapse" id="navbarSupportedContent"
          id="navbarNavDropdown">
              <!-- Left Side Of Navbar -->
              <ul class="navbar-nav mr-auto">
                <li>
                  <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="¿Qué estas buscando?" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                  </form>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Productos
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Vehiculos</a>
                    <a class="dropdown-item" href="#">Tecnología</a>
                    <a class="dropdown-item" href="#">Deportes y aire libre</a>
                    <a class="dropdown-item" href="#">Belleza y cuidado personal</a>
                    <a class="dropdown-item" href="#">Libros</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="faq.php">Ayuda</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i></a>
                </li>
              </ul>

              <!-- Right Side Of Navbar -->
              <ul class="navbar-nav ml-auto">
                  <!-- Authentication Links -->
                  @guest
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('login') }}">{{ __('Ingresar') }}</a>
                      </li>
                      @if (Route::has('register'))
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('register') }}">{{ __('Registrar') }}</a>
                          </li>
                      @endif
                  @else
                      <li class="nav-item dropdown">
                          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <img style="width: 40px; height: 40px; border: 2px solid #3f51b5" src="{{  Storage::url(Auth::user()->avatar)}}" class="rounded-circle z-depth-0 avatar" alt="avatar">
                            {{ Auth::user()->name }} <span class="caret"></span>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            @if (Auth::User()->role == 'admin')
                              <a class="dropdown-item" href="{{route('users.index')}}">Administrador de usuarios</a>
                              <a class="dropdown-item" href="#">Administrador de productos</a>
                            @endif
                              <a class="dropdown-item" href="{{route('products.create')}}">Nuevo Producto</a>
                              <a class="dropdown-item" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                  {{ __('Logout') }}
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  @csrf
                              </form>
                          </div>
                      </li>
                  @endguest
              </ul>
          </div>
      </div>
  </nav>
<br>
<br>