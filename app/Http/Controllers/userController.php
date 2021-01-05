<?php

namespace App\Http\Controllers;

use App\Models\tb_curso;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function view($id){
        $curso = tb_curso::findOrFail($id);
        // dd($curso);
        return view('/detalle-curso-user', compact('curso'));
    }
}
