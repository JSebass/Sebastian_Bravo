<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function perros(){
        $producto1=[
            'Alimento para perros',
            'Cod: 111',
            'Valor: 14900'
        ];
        $producto2=[
            'Comedero Antideslizante',
            'Cod: 222',
            'Valor: 19000'
        ];
        $producto3=[
            'Snack Dental Vegano',
            'Cod: 333',
            'Valor: 15000'
        ];
        $producto4=[
            'Correa Solaris',
            'Cod: 444',
            'Valor: 10500'
        ];
        $producto5=[
            'Alimento Humedo',
            'Cod: 555',
            'Valor: 14900'
        ];
        $producto6=[
            'Juguete para Perro',
            'Cod: 666',
            'Valor: 14900'
        ];
        return view('productos.perros')
        ->with('prod1', $producto1)
        ->with('prod2', $producto2)
        ->with('prod3', $producto3)
        ->with('prod4', $producto4)
        ->with('prod5', $producto5)
        ->with('prod6', $producto6);
    }
}
