<?php

namespace App\Http\Controllers;

use App\Models\tb_curso;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class cursoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $cursos = tb_curso::orderBy('id', 'desc')->paginate(10);
        // return $cursos;
        return view('cursos/adm-cursos', compact('cursos'));
    }

    public function view_create()
    {
        return view('cursos/create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|image|max:2048'
        ]);
        $archivos = $request->file('file')->store('public/img/cursos');
        $url_img = Storage::url($archivos);
        $curso = new tb_curso();
        $curso->nom_curso = $request->nombreCurso;
        $curso->horas_duracion = $request->duracion;
        $curso->fec_inicio = $request->fecIni;
        $curso->fec_fin = $request->fecFin;
        $curso->sede = $request->sede;
        $request->jornadaDia = !isset($request->jornadaDia) ? '0' : '1';
        $request->jornadaNoche = !isset($request->jornadaNoche) ? '0' : '1';
        $curso->jornada_diurna = $request->jornadaDia;
        $curso->jornada_nocturna = $request->jornadaNoche;
        $curso->descripcion = $request->descripcion;
        $curso->url_img = $url_img;
        $curso->save();
        return redirect()->route('admin.cursos.view')->with('alertCursos', 'Curso creado correctamente');
    }

    public function show($id){
        $curso = tb_curso::findOrFail($id);
        // dd($curso);
        return view('cursos/detalle-curso', compact('curso'));
    }

    public function edit($id){
        $curso = tb_curso::findOrFail($id);
        // dd($curso);
        return view('cursos/edit-curso', compact('curso'));
    }

    public function update(Request $request, $id){
        $curso=tb_curso::findOrFail($id);
        if($request->file != null){
            $request->validate([
                'file' => 'image|max:2048'
            ]);
            $archivos = $request->file('file')->store('public/img/cursos');
            $url_img = Storage::url($archivos);
            $curso->url_img = $url_img;
        }
        $curso->nom_curso = $request->nombreCurso;
        $curso->horas_duracion = $request->duracion;
        $curso->fec_inicio = $request->fecIni;
        $curso->fec_fin = $request->fecFin;
        $curso->sede = $request->sede;
        $request->jornadaDia = !isset($request->jornadaDia) ? '0' : '1';
        $request->jornadaNoche = !isset($request->jornadaNoche) ? '0' : '1';
        $curso->jornada_diurna = $request->jornadaDia;
        $curso->jornada_nocturna = $request->jornadaNoche;
        $curso->descripcion = $request->descripcion;

        $curso->save();
        return redirect()->route('admin.cursos.view')->with('alertCursos', 'Curso modificado correctamente');
    }

    public function destroy($id){
        $curso=tb_curso::findOrFail($id);
        $curso->delete();
        return redirect()->route('admin.cursos.view')->with('alertCursos', 'Curso eliminado correctamente');
    }
}
