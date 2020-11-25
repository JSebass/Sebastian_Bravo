@extends('master')
   @section('contenido')
        <h1 style="font: oblique bold 120% cursive;font-size: 45px;text-align:center;">Bienvenidos a la tienda "Quiero a mi Mascota"</h1> 
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="height:10cm;">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ url('/imagenes/1.jpg') }}" class="d-block w-100" alt="..." style="height:10cm;">
    </div>
    <div class="carousel-item">
      <img src="{{ url('/imagenes/2.jpg') }}" class="d-block w-100" alt="..."style="height:10cm;">
    </div>
    <div class="carousel-item">
      <img src="{{ url('/imagenes/3.jpg') }}" class="d-block w-100" alt="..."style="height:10cm;">
    </div>
    <div class="carousel-item">
      <img src="{{ url('/imagenes/4.jpg') }}" class="d-block w-100" alt="..." style="height:10cm;">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
@stop