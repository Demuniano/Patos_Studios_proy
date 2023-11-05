<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet"/>
    <title>Document</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body id="body-pd">
  
<header class="header" id="header">
  <div class="header_toggle">
    <div id="nav_Title">
      <i class="bx bx-menu" id="header-toggle"></i>
      <a href="index.html" id="Title"><span >Patos Vapes Store</span></a>
    </div>
  </div>
  <div class="header_icons">
      <a href="usuario.html">
          <img src="/img/perfil.png" alt="Icono de perfil" id="icono_perfil">
      </a>
      <a href="shoplist.html">
          <img src="/img/carrito.png" alt="Icono de carrito de compras" id="icono_carrito">
      </a>
  </div>
</header>

   

  </header>

  <div class="l-navbar" id="nav-bar">
    <nav class="nav">
      <div>
        <a href="index.html" class="nav_logo">
          <img src="/img/d2.svg" alt="icono pato" id="duckIcon">
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
        <a href="login1.html" class="nav_link">
      <i class="bx bx-log-in nav_icon"></i>
      <span class="nav_name">LogIn</span>
    </a>
    <a href="#" class="nav_link">
      <i class="bx bx-log-out nav_icon"></i>
      <span class="nav_name">SignOut</span>
    </a>
  </div>
    </nav>
  </div>
    <div class="row">
        <div class="col-md-5 margen-izquierdo">
            <div class="container">
                <h1 class="infh1">INFORMACION</h1>
                <div class="info-cards">
                    <div class="info-card">
                        <h2 class="inf">Num. vapes en bodega</h2>
                        <p>123</p>
                    </div>
                    <div class="info-card">
                        <h2>Numero de usuarios</h2>
                        <p>456</p>
                    </div>
                    <div class="info-card">
                        <h2>Vapes vendidos</h2>
                        <p>789</p>
                    </div>
                </div>
            </div>


            <h2 class="inf">Informacion Vapes</h2>
            <div class="table-container">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID Estación</th>
                            <th>Tipo</th>
                            <th>Nombre</th>
                            <th>Cantidad</th>
                            <th>Marca</th>
                            <th>Acciones</th> 
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Vaporizador</td>
                            <td>Modelo A</td>
                            <td>50</td>
                            <td>Marca X</td>
                            <td>
                                <button class="btn btn-primary">Editar</button>
                                <button class="btn btn-danger">Eliminar</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Cigarrillo electrónico</td>
                            <td>Modelo B</td>
                            <td>30</td>
                            <td>Marca Y</td>
                            <td>
                                <button class="btn btn-primary">Editar</button>
                                <button class="btn btn-danger">Eliminar</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-6">
            <h2 class="inf">Usuarios</h2>
            <div class="table-container">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID Usuario</th>
                            <th>Productos</th>
                            <th>Nombre</th>
                            <th>Comprados</th>
                            <th>Acciones</th> 
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Producto A</td>
                            <td>Usuario 1</td>
                            <td>5</td>
                            <td>
                                <button class="btn btn-primary">Editar</button>
                                <button class="btn btn-danger">Eliminar</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Producto B</td>
                            <td>Usuario 2</td>
                            <td>10</td>
                            <td>
                                <button class="btn btn-primary">Editar</button>
                                <button class="btn btn-danger">Eliminar</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <footer class="pie-pagina">
        <div class="grupo-1">
            <div class="box">
                <div class="red-social">
                    <a href="" class="fa fa-facebook">
                      <img src="/imagenes/facebook.png" alt="Icono de facebook">
                    </a>
                    <a href="https://www.instagram.com/patosvapes/?hl=es" class="fa fa-instagram" target="_blank">
                      <img src="/imagenes/insta1.png" alt="Icono de instagram">
                    </a>
                    <a href="http://wa.me/573227693393" class="fa fa-twitter" target="_blank">
                      <img src="/imagenes/watsap.png" alt="Icono de watsap">
                    </a>
                </div>
            </div>
            <div class="box">
                <h2>Contacto pagina web</h2>
                <p>Calle x #4y - 2t</p>
                <p>Manizales, Caldas</p>
                <p>3107894905</p>
                <p>8907658</p>
            </div>
            <div class="box">
              <p>&copy; Copyright 2023.</p>
              <p>Algunos derechos reservados.</p>
              <p>Actualizacion: 24/09/2023</p>
          </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="/script.js"></script>
</body>
</html>
