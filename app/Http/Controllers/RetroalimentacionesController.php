<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Retroalimentacion;

class RetroalimentacionesController extends Controller
{
    //se utiliza para obtener todos los registros de la tabla
    public function index()
    {
        return Retro::all();
    }
    //Esta función se utiliza para almacenar un nuevo dato en la base de datos
    public function store(Request $request)
    {
        $retro=new Retro();
        $retro->retroalimentacion=$request->retroalimentacion;
        $retro->id_juegos=$request->id_juegos;
        $retro->save();
        return $retro;
    }

    //Esta función se utiliza para actualizar el dato existente en la base de datos
    public function update(Request $request, $id)
    {
        $retro=new Retro();
        $retro->retroalimentacion=$request->retroalimentacion;
        $retro->id_juegos=$request->id_juegos;
        $retro->save();
        return $retro;
    }

    //Esta función se utiliza para eliminar el dato de la base de datos
    public function destroy($id)
    {
        return Retro::destroy($id);
    }
}
