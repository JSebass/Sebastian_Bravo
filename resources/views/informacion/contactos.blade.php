@extends('master')
   @section('contenido')
        
        <br>
        <div class = "container" style="width: 100%;" >
            <h1 style="font: oblique bold 120% cursive;font-size: 45px;">Contacta Con Nosotros</h1> 
            <p>Puedes contactarte con nosotros mediante: </p>
            <ul>
                <li>Teléfono: (317) 808 9789</li>
                <li>Correo electrónico: <a href="quieroamimascota:info@petuky.com" xlink="href">quieroamimascota:info@quieroamimascota.com</a></li>
            </ul>
            <h1 style="font: oblique bold 120% cursive;font-size: 45px;">Dirección de nuestras oficinas:</h1> 
            <p>
                <strong>QUIERO A MI MASCOTA  –&nbsp;Ipiales</strong><br>
                Polígono&nbsp;B/ La Floresta, Calle Pintores, 2, Edificio Business Center<br>
                Ipiales&nbsp;28923 (Nariño)
            </p>
            <img src="{{ url('/imagenes/mapa.png') }}" alt="">
            

        </div>
@stop