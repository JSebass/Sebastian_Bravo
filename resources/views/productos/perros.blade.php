@extends('master')
   @section('contenido')
        
   <h1 style="font: oblique bold 120% cursive;font-size: 45px;text-align:center;">"Productos para Perros"</h1> 
    <br>
    <table>
        <tr>
            <td>
            <ul>
                @foreach ($prod1 as $p)
                <li> {{ $p }} </li>
                @endforeach
                <button type="button" class="btn btn-primary">Comprar</button>
                </ul>
            </td>
            <td>
            <ul>
                @foreach ($prod2 as $p)
                <li> {{ $p }} </li>
                @endforeach
                <button type="button" class="btn btn-primary">Comprar</button>
                </ul>
            </td>
            <td>
            <ul>
                @foreach ($prod3 as $p)
                <li> {{ $p }} </li>
                @endforeach
                <button type="button" class="btn btn-primary">Comprar</button>
                </ul>
            </td>
        </tr>
        <tr>
        <td>
            <ul>
                @foreach ($prod4 as $p)
                <li> {{ $p }} </li>
                @endforeach
                <button type="button" class="btn btn-primary">Comprar</button>
                </ul>
            </td>
            <td>
            <ul>
                @foreach ($prod5 as $p)
                <li> {{ $p }} </li>
                @endforeach
                <button type="button" class="btn btn-primary">Comprar</button>
                </ul>
            </td>
            <td>
            <ul>
                @foreach ($prod6 as $p)
                <li> {{ $p }} </li>
                @endforeach
                <button type="button" class="btn btn-primary">Comprar</button>
                </ul>
            </td>
        </tr>
    </table>
@stop