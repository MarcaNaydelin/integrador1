<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    //se utiliza para obtener todos los registros de la tabla
    public function index()
    {
        return User::all();
    }
    //Esta función se utiliza para almacenar un nuevo dato en la base de datos
    public function store(Request $request)
    {
        $user=new User();
        $user->nombre=$request->nombre;
        $user->apellido=$request->apellido;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->save();
        return $user;
    }

    //Esta función se utiliza para actualizar el dato existente en la base de datos
    public function update(Request $request, $id)
    {
        $user=User::find($id);
        $user->nombre=$request->nombre;
        $user->apellido=$request->apellido;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->save();
        return $user;
    }

    //Esta función se utiliza para eliminar el dato de la base de datos
    public function destroy($id)
    {
        return User::destroy($id);
    }
}
