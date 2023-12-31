@yield('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patos Estudios</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/homeStyles.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet"/>
    <script src="{{ asset('js/scriptLayout.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous" defer></script>
</head>
<body id="body-pd">
<header class="header" id="header">
  <div class="header_toggle">
    <div id="nav_Title">
      <i class="bx bx-menu" id="header-toggle"></i>
      <a href="{{ url('/') }}" id="Title"><span >Patos Vapes Store</span></a>
    </div>
  </div>
  <div class="header_icons">
      <a href="{{ route('profile.edit') }}">
          <img src="{{ asset('/images/icons/perfil.png') }}" alt="Icono de perfil" id="icono_perfil">
      </a>
      <a href="{{route('cart.index')}}">
          <img src="{{asset('/images/icons/carrito.png')}}" alt="Icono de carrito de compras" id="icono_carrito">
      </a>
  </div>
</header>


  <div class="l-navbar" id="nav-bar">
    <nav class="nav">
      <div>
        <a href="{{ url('/') }}" class="nav_logo">
          <img src="{{asset('/images/icons/d2.svg')}}" alt="icono pato" id="duckIcon">
          <span class="nav_logo-name">PatosVapes</span>
        </a>
        <div class="nav_list">
          <a href="#" class="nav_link active">
            <i class="bx bx-search"></i>
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" id="searchInput">
          </a>
          <a href="#" class="nav_link">
            <i class="bx bx-trash"></i>
            <span class="nav_name">Desechables</span>
          </a>
          <a href="#" class="nav_link">
            <i class="bx bx-recycle"></i>
            <span class="nav_name">Recargables</span>
          </a>
          <a href="#" class="nav_link">
            <i class="bx bx-vial"></i>
            <span class="nav_name">Destilados</span>
          </a>
        </div>
      </div>
      <div>
      <a href="{{ route('profile.edit') }}" class="nav_link">
        <i class="bx bx-log-in nav_icon"></i>
        <span class="nav_name">LogIn</span>
      </a>
      <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav_link">
        <i class="bx bx-log-out nav_icon"></i>
        <span class="nav_name">SignOut</span>
      </a>
      
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
      </form>
    </div>
    </nav>
  </div>
