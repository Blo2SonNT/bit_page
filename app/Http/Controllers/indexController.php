<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_curso;

class indexController extends Controller
{
    public function __invoke(Request $request)
    {
        $busqueda = $request->get('busqueda');
        $cursos = tb_curso::where('nom_curso', 'like', '%'.$busqueda.'%')->orderBy('id', 'desc')->paginate(9);
        return view('index', compact('cursos', 'busqueda'));
    }

    // public function __invoke()
    // {
    //     return view('index');
    // }
}
