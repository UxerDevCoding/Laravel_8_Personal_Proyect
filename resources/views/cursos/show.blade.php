@extends('layouts.app')

@section('title', 'course')
    
@section('content')

    <h1 class="d-flex justify-content-center mt-5">Bienvenido al curso: {{$course->name}}</h1>
    <a href="{{route('courses.index')}}"><button type="submit" class="btn btn-primary" value="Add">Volver a Cursos</button></a>
    <a href="{{route('courses.edit', $course)}}"><button type="submit" class="btn btn-secondary" value="Add">Editar Curso</button></a>
    <div class="container my-5">
        <div class="card text-center shadow">
            <div class="card-body">
            <h5 class="text-primary">{{$course->name}}</h5>
            <h5 class="text-secondary">Categoría: {{$course->category}}</h5 class="text-secondary">
            <p>{{$course->description}}</p>
            </div>
        </div>
    </div>
  
@endsection

                
    {{-- {{$item->name}} --}}
    {{-- <a href="{{route('courses.show', $item->id)}}">{{$item->name}}</a> --}}
     