@extends('layouts.plantilla')

@section('title', 'Editar Curso')

@section('content')
    <h1>En esta página podras editar un curso</h1>

    <form action="{{route("cursos.update", $curso)}}" method="POST">

        @csrf
        @method("PUT")

        <label> Name:
            <br>
            <input type="text" name="name" value="{{$curso->name}}">
        </label>

        <br>

        <label> Description:
            <br>
            <textarea name="description" rows="5">{{$curso->description}}</textarea>
        </label>

        <br>

        <label> Category
            <br>
            <input type="text" name="category" value={{$curso->category}}>
        </label>

        <br>

        <button type="submit">Editar Curso</button>

    </form>
@endsection