@extends('layouts.plantilla')

@section('title', 'Curso '. $curso->name)

@section('content')
    <h1>Este es el curso: {{$curso->name}}</h1>
    <a href={{route('cursos.index')}}>Volver a Cursos</a>
    <br>
    <a href={{route('cursos.edit', $curso->id)}}>Editar Curso</a>
    <p><strong> Category </strong> {{$curso->category}}</p>
    <p>{{$curso->description}}</p>
@endsection