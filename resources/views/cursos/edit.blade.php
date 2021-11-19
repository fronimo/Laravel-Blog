@extends('layouts.plantilla')

@section('title', 'Editar Curso')

@section('content')
    <h1>En esta página podras editar un curso</h1>

    <form action="{{route("cursos.update", $curso)}}" method="POST">

        @csrf
        @method("PUT")

        <label> Name:
            <br>
            <input type="text" name="name" value="{{old("name", $curso->name)}}">
        </label>

        <br>

        @error('name')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <label> Description:
            <br>
            <textarea name="description" rows="5">{{old("description", $curso->description)}}</textarea>
        </label>

        <br>

        @error('description')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>

        <label> Category
            <br>
            <input type="text" name="category" value={{old("category", $curso->category)}}>
        </label>

        <br>

        @error('category')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror

        <button type="submit">Editar Curso</button>

    </form>
@endsection