@extends('master')
   @section('contenido')
        <h1 style="font: oblique bold 120% cursive;font-size: 45px;text-align:center;">"Quiero a mi Mascota"</h1> 
        <br>
        <div class = "container" style="width: 100%;text-align:center;" >
            <table style="border-collapse: separate;border-spacing: 20px 10px;">
                <tr>
                    <th style="font: oblique bold 120% cursive;font-size: 30px;text-align: center;">MISIÓN</th>
                    <th style="font: oblique bold 120% cursive;font-size: 30px;text-align: center;">VISIÓN</th>
                </tr>
                <br>
                <tr>
                    <td>
                        <p style="font: oblique bold 120% cursive;font-size: 25px;text-align: center;">La Misión de Tienda de Mascotas consiste en brindar una solución integral a la atención de 
                        la mascota, a partir de una inmejorable oferta de producto, precio, calidad y servicio.</p>
                    </td>
                    <td>
                        <p style="font: oblique bold 120% cursive;font-size: 25px;text-align: center;">La Visión de Tienda de Mascotas es continuar siendo la empresa Nº 1 en la comercialización 
                        de productos para mascotas en el Suroccidente Colombiano, operando con sucursales en las principales ciudades.</p>
                    </td>
                </tr>
            </table>
            
            <img src="{{ url('/imagenes/mision.jpg') }}" alt="">
            

        </div>
@stop