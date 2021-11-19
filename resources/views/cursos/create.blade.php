@extends('layouts.plantilla')

@section('title', 'Cursos Create')

@section('content')
    <h1>En esta pagina podrás crear un curso</h1>

    <form action={{route("cursos.store")}} method="POST">

        @csrf

        <label> Name:
            <br>
            <input type="text" name="name" value={{old("name")}}>
        </label>

        @error('name')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Description:
            <br>
            <textarea name="description" rows="5">{{old("description")}}</textarea>
        </label>

        @error('description')
            <br>
            <small>*{{$message}}</small>
            <br>            
        @enderror
    
        <br>
        <label>
            Category:
            <br>
            <input type="text" name="category" value={{old("category")}}>
        </label>

        @error('category')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <button type="submit">Crear Curso</button>

    </form>
@endsection