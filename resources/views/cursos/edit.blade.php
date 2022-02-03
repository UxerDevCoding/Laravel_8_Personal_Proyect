@extends('layouts.app')

@section('title', 'course edit')
    
@section('content')

    <h1>Página principal para editar cursos</h1>
    <form action="{{route('courses.update', $course)}}" method="post">

        @csrf

        @method('put')

        <div class="col-4">
            <label class="form-label" for="user_name">Título</label>
            <input type="text" class="form-control" name="name" id="name" value="{{$course->name}}" required>
            <label class="form-label" for="user_name">Categoría</label>
            <input type="text" class="form-control" name="category" id="category" value="{{$course->category}}" required>
        </div><br>
        <div class="col-4">
            <label for="inputDescription" class="form-label">Descripción</label>
            <textarea class="form-control" type="text" name="description" id="description" >{{$course->description}}</textarea><br>
            <div class="d-grid gap-2 d-md-block">
                <button type="submit" class="btn btn-primary" value="Add">Actualizar</button>
                <a href="?action=home"><button class="btn btn-secondary">Cancel</button></a>   
            </div>
        </div>    

@endsection