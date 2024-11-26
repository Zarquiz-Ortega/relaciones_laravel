<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    { //método para vista principal

        $cursos = Curso::orderby('id','desc')->paginate();

        return view('cursos.index', compact('cursos'));
    }
    public function create()
    { //método para la vista crear 
        return view('cursos.create');
    }

    public function store(Request $request){
        $curso = new Curso();

        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;

        $curso->save();
    }

    public function show($id)
    { //método para la vista por curso

        $curso = Curso::find($id);

        return view('cursos.show', compact('curso'));
    }
}
