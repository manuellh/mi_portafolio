<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Fixed Bootstrap Sidebar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" >
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
  <link href="{{ asset('css/sidenavstyle.css') }}" rel="stylesheet">
  <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
<!-- partial:index.partial.html -->
<div class="sidebar-container">
  <div class="sidebar-logo">
    Mi Portafolio
  </div>
  <ul class="sidebar-navigation">
    <li class="header">Navigation</li>
    @if(Route::has('login'))
        <li>
            <a href="{{ route('misdatos.index') }}">
                <i class="fa fa-user" aria-hidden="true"></i> {{ __('Mis Datos') }}
        </li>
        <li>
            <a href="{{ route('habilidades.index') }}">
                <i class="fa fa-code" aria-hidden="true"></i> {{ __('Habilidades') }}
        </li>
        <li>
            <a href="{{ route('experiencia.index') }}">
                <i class="fa fa-id-badge" aria-hidden="true"></i> {{ __('Experiencia') }}
        </li>
        <li>
            <a href="{{ route('proyectos.index') }}">
                <i class="fa fa-swatchbook" aria-hidden="true"></i> {{ __('Proyectos') }}
        </li>
        <li>
            <a href="{{ route('hobbies.index') }}">
                <i class="fa fa-palette" aria-hidden="true"></i> {{ __('Hobies') }}
        </li>

        <li class="header">Another Menu</li>

        <li>
          <a href="#">
            <i class="fa fa-cog" aria-hidden="true"></i> Settings
          </a>
        </li>
    @endif
  </ul>
</div>

<div class="content-container">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto flex-nowrap">
          @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif

                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
          </ul>
        </div>
      </div>
    </nav>
  <div class="container-fluid">

    <!-- Main component for a primary marketing message or call to action -->
    <div class="jumbotron">
      <main class="py-4">
        @yield('content')
      </main>
    </div>

  </div>
</div>
<!-- partial -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>
</html>
