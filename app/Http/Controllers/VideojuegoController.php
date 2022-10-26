<?php

namespace App\Http\Controllers;

use App\Models\Videojuego;
use Illuminate\Http\Request;

class VideojuegoController extends Controller
{
    public function index()
    {
        $videojuego=Videojuego::all();
        return $videojuego;
    }

    public function store(Request $request){
        $videojuego = new Videojuego;
        $videojuego->titulo=$request->input('titulo');
        $videojuego->genero=$request->input('genero');
        $videojuego->descripcion=$request->input('descripcion');
        $videojuego->save();
    }

    public function show($id)
    {
        $videojuego=Videojuego::findOrFail($id);
        return $videojuego;
    }
    public function update(Request $request)
    {
        $videojuego = Videojuego::findOrFail($request->id);

        $videojuego->name = $request->titulo;
        $videojuego->genero = $request->genero;
        $videojuego->descripcion = $request->descripcion;

        $videojuego->save();

        return $videojuego;
        //Esta función actualizará la tarea que hayamos seleccionado

    }

    public function destroy($id){
        $videojuego=Videojuego::findOrFail($id);
        $videojuego->delete();

    }
}
