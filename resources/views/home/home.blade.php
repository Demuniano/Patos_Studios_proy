@extends('layout.template')
@section('content')
<html lang="en">
  <div class="container-fluid">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{asset('/images/socialMedia/portada5.JPG')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{asset('/images/socialMedia/portada1.JPG')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{asset('/images/socialMedia/portada3.JPG')}}" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
      </button>
    </div>
    
      <div class="container">
          <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row">
                  <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                      <img src="{{asset('/images/socialMedia/vape6.jpeg')}}" class="card-img-top" alt="">
                      <div class="card-body">
                        <h5 class="card-title">Fruit Punch 2500 Puffs</h5>
                        <p class="card-text">Prueba la experiencia de nuestro vape frutal sabor a Ponche de frutas.</p>
                        <a href="#" class="btn btn-primary">Añadir al carrito</a>
                      </div>
                    </div>
                  </div>
        
                  <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                      <img src="{{asset('/images/socialMedia/vape3.jpeg')}}" class="card-img-top" alt="">
                      <div class="card-body">
                        <h5 class="card-title">Blue Razz Ice 2500 Puffs</h5>
                        <p class="card-text">Una experiencia refrescante y llena de sabor con el sabor de Mora azul helada.</p>
                        <a href="#" class="btn btn-primary">Añadir al carrito</a>
                      </div>
                    </div>
                  </div>
        
                  <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                      <img src="{{asset('/images/socialMedia/vape7.jpeg')}}" class="card-img-top" alt="">
                      <div class="card-body">
                        <h5 class="card-title">Rasperry Watermelon 2500 Puffs</h5>
                        <p class="card-text">Frambuesa sandia un sabor super delicioso para los amantes de las frutas.</p>
                        <a href="#" class="btn btn-primary">Añadir al carrito</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        
              <div class="carousel-item">
                <div class="row">
                  <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                      <img src="{{asset('/images/socialMedia/vape1.jpeg')}}" class="card-img-top" alt="">
                      <div class="card-body">
                        <h5 class="card-title">Coconut Crumble 2500 Puffs</h5>
                        <p class="card-text">A ti que te gusta estar relajado que mejor que estar nuestro sabor a Nube de Coco.</p>
                        <a href="#" class="btn btn-primary">Añadir al carrito</a>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                      <img src="{{asset('/images/socialMedia/vape5.jpeg')}}" class="card-img-top" alt="">
                      <div class="card-body">
                        <h5 class="card-title">Sour Apple Ice 2500 Puffs</h5>
                        <p class="card-text">Jugo de Manzana helado para ti que te gustan los sabores deliciosos una fruta resfrescantes.</p>
                        <a href="#" class="btn btn-primary">Añadir al carrito</a>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                      <img src="{{asset('/images/socialMedia/vape7.jpeg')}}" class="card-img-top" alt="">
                      <div class="card-body">
                        <h5 class="card-title">Rasperry Watermelon 2500 Puffs</h5>
                        <p class="card-text">Frambuesa sandia un sabor super delicioso para los amantes de las frutas.</p>
                        <a href="#" class="btn btn-primary">Añadir al carrito</a>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
            
            
            <a class="carousel-control-prev" href="#carouselExample" role="button" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExample" role="button" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Siguiente</span>
            </a>
          </div>
        </div>
      
            </div>
        </div>
    </div>

      <section class="about-services">
        <div class="servicios-cont">
          <div class="servicio">
            <img src="{{asset('/images/footer/box1.png')}}" alt="">
            <h2>Recoge en tienda</h2>
          </div>
          <div class="servicio second">
            <img src="{{asset('/images/footer/brand.png')}}" alt="">
            <h2>Gran variedad de marcas</h2>
          </div>          
          <div class="servicio">
            <img src="{{asset('/images/footer/truck.png')}}" alt="">
            <h2>Métodos de entrega</h2>
          </div>
        </div>
      </section>
  <div class="container">
      <footer class="pie-pagina">
        <div class="grupo-1">
            <div class="box">
                <div class="red-social">
                    <a href="https://www.facebook.com/profile.php?id=100092607999343" class="fa fa-facebook" target="_blank">
                      <img src="{{asset('/images/socialMedia/facebook.png')}}" alt="Icono de facebook">
                    </a>
                    <a href="https://www.instagram.com/patosvapes/?hl=es" class="fa fa-instagram" target="_blank">
                      <img src="{{asset('/images/socialMedia/insta1.png')}}" alt="Icono de instagram">
                    </a>
                    <a href="http://wa.me/573227693393" class="fa fa-twitter" target="_blank">
                      <img src="{{asset('/images/socialMedia/watsap.png')}}" alt="Icono de watsap">
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
  </div>
</body>
</html>
@endsection