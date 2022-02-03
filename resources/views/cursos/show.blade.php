@extends('layouts.app')

@section('title', 'course')
    
@section('content')

    <h1 class="d-flex justify-content-center mt-5">>Bienvenido al curso{{$course->name}}</h1>
    <a href="{{route('courses.index')}}">Volver a Cursos</a>
    <a href="{{route('courses.edit', $course)}}">Editar Curso</a>
    <p>Categoría: {{$course->category}}</p>
    <p>{{$course->description}}</p>
    
@endsection