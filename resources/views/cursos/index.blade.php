@extends('layout.plantilla')

@section('title', 'Cursos | Inicio')

@section('content')
    <h1>Bienvenido a la pagina de Cursos</h1>
    <a href="{{route('cursos.create')}}">Crear Curso</a>
    <ul>
        @foreach ($cursos as $curso )
            <li>
                <a href="{{route('cursos.show', $curso->id)}}">
                    {{$curso->name}}
                </a>
            </li>
            <hr>
        @endforeach
    </ul>
    {{$cursos->links()}}
@endsection
