@extends('layout.template') 

@section('content')

<div class="container">
    <div class="text-center mb-5">
      <h3>Carrito de compras</h3>
    </div>
    <div class="card mb-3">
        <div class="card-body">
            <div class="d-flex flex-column flex-lg-row">
                <div class="row flex-fill">
                    <div class="col-sm-1"> 
                        <img class="img-fluid" src="/imagenes/vape1.jpeg" alt="Imagen 1">
                    </div>
                    <div class="col-sm-3">
                        <h4 class="h5">Hyde Coconout Crumble</h4>
                    </div>
                    <div class="col-sm-2 py-2">
                        <span class="badge bg-secondary">2500 puffs</span>
                        <span class="badge bg-secondary">Sabor a coco</span>
                    </div>
                    <div class="col-sm-3 py-2">
                      <div class="input-group">
                        <span class="input-group-btn">
                          <button type="button" class="btn btn-default" onclick="decrementValue(1)">-</button>
                        </span>
                        <input type="number" class="form-control" id="numberInput1" value="1" min="1">
                        <span class="input-group-btn">
                          <button type="button" class="btn btn-default" onclick="incrementValue(1)">+</button>
                        </span>
                      </div>
                      <label for="" class="labelprecio">Precio: $ 30.000</label>
                    </div>
                      <div class="col-sm-3">
                        <div>
                            <input class="form-check-input custom-checkbox" type="checkbox" value="" aria-label="...">
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-body">
            <div class="d-flex flex-column flex-lg-row">
                <div class="row flex-fill">
                    <div class="col-sm-1"> 
                        <img class="img-fluid" src="/imagenes/vape2.jpeg" alt="Imagen 2">
                    </div>
                    <div class="col-sm-3">
                        <h4 class="h5">Hyde Lemon Ice Cream</h4>
                    </div>
                    <div class="col-sm-2 py-2">
                        <span class="badge bg-secondary">2500 puffs</span>
                        <span class="badge bg-secondary">Sabor a helado de limón</span>
                    </div>
                    <div class="col-sm-3 py-2">
                      <div class="input-group">
                        <span class="input-group-btn">
                          <button type="button" class="btn btn-default" onclick="decrementValue(2)">-</button>
                        </span>
                        <input type="number" class="form-control" id="numberInput2" value="1" min="1">
                        <span class="input-group-btn">
                          <button type="button" class="btn btn-default" onclick="incrementValue(2)">+</button>
                        </span>
                      </div>
                      <label for="" class="labelprecio">Precio: $ 30.000</label>
                    </div>
                      <div class="col-sm-3">
                        <div>
                            <input class="form-check-input custom-checkbox" type="checkbox" value="" aria-label="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-body">
            <div class="d-flex flex-column flex-lg-row">
                <div class="row flex-fill">
                    <div class="col-sm-1"> <!-- Agrega una columna para la imagen -->
                        <img class="img-fluid" src="/imagenes/vape3.jpeg" alt="Imagen 3">
                    </div>
                    <div class="col-sm-3">
                        <h4 class="h5">Hyde Blue Razz Ice</h4>
                    </div>
                    <div class="col-sm-2 py-2">
                        <span class="badge bg-secondary">2500 puffs</span>
                        <span class="badge bg-secondary">Sabor a mora azul helada</span>
                    </div>
                    <div class="col-sm-3 py-2">
                      <div class="input-group">
                        <span class="input-group-btn">
                          <button type="button" class="btn btn-default" onclick="decrementValue(3)">-</button>
                        </span>
                        <input type="number" class="form-control" id="numberInput3" value="1" min="1">
                        <span class="input-group-btn">
                          <button type="button" class="btn btn-default" onclick="incrementValue(3)">+</button>
                        </span>
                      </div>
                      <label for="" class="labelprecio">Precio: $ 30.000</label>
                    </div>
                      <div class="col-sm-3">
                        <div>
                            <input class="form-check-input custom-checkbox" type="checkbox" value="" aria-label="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-3">
      <div class="card-body">
        <div class="subtotal">
        <h4>Subtotal: 3 productos</h4>
        <h5>$ 90.000</h5>
      </div>
      <div class="btnSubtotal">
        <button type="button" class="btn btn-primary">Comprar</button>
        <button type="button" class="btn btn-danger">Cancelar</button>
      </div>
      </div>
    </div>
  </div>
@endsection