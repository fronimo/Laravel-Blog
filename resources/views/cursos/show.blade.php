@extends('layouts.plantilla')

@section('title', 'Curso '. $curso)

@section('content')
    <h1>Este es el curso: {{$curso}}</h1>
@endsection