@extends('layouts.plantilla')

@section('title', 'Cursos Create')

@section('content')
    <h1>En esta pagina podrás crear un curso</h1>

    <form action={{route("cursos.store")}} method="POST">

        @csrf

        <label> Name:
            <br>
            <input type="text" name="name">
        </label>

        <br>
        <label>
            Description:
            <br>
            <textarea name="description" rows="5"></textarea>
        </label>
    
        <br>
        <label>
            Category:
            <br>
            <input type="text" name="category">
        </label>
        <br>
        <button type="submit">Crear Curso</button>

    </form>
@endsection