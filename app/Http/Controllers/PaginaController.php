<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function canciones($id = null)
    {
        $canciones = [];
    $canciones[] = ['nombre' => 'hola', 'artista' => 'adios'];
    $canciones[] = ['nombre' => 'eeeee', 'artista' => 'aaaaa'];
    $canciones[] = ['nombre' => 'eeeee', 'artista' => 'cccc'];
    $cancioness[] = ['nombre' => 'rrrr', 'artista' => 'vvvv'];
    $canciones[] = ['nombre' => '3333', 'artista' => '1111'];

    $otra = 'Hola';

    if(!is_null($id)){
        $cancion_seleccionado = $canciones[$id];}
    else {
        $cancion_seleccionado = null;
    }

    return view('canciones', compact( 'canciones','cancion_seleccionado'));

    }

    public function contacto()
    {
        return view ('contacto');
    }

    public function bautizo(request $request) //recibe informacion y valida, guarda y redirecciona
     { 
        //   dd($request->all(), $request->nombre, $request->input('codigo'));
          //recibe y valida
          $request->validate([
            'nombre' => 'required | min:3  | max:255',
            'codigo' => ['required', 'integer', 'max:9']
          ]);
    }

}
