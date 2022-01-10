<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::paginate(1);
        return view('welcome', ['usuarios' => $usuarios]);
    }
    public function create()
    {
        return view('criar');
    }

    public function criar(request $request)
    {

        $request->validate([
                'name' => 'required',
                'email'  => 'required|unique:usuarios',
                'produto' => 'required'
            ]);

         $dados = new Usuario();
         $dados->name = $request->name;
         $dados->email = $request->email;
         $dados->produto = $request->produto;
         $dados->save();

         return redirect('/');
    }

    public function editar($id) {
        $id = Usuario::findorFail($id);
        return view('editar', ['produto' => $id]);
    }

    public function destroy($id) {
        $id = Usuario::findorFail($id)->delete();
        return redirect('/');
    }

    public function edit($id, request $request) {
        $usuario = Usuario::findorfail($id);
        $usuario->email = $request->email;
        $usuario->name = $request->name;
        $usuario->produto = $request->produto;
        $usuario->save();

        return redirect('/');
    }





}
