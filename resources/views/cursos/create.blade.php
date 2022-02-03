@extends('layouts.app')

@section('title', 'course create')
    
@section('content')

    <h1>Página principal para crear cursos</h1>
    <form action="{{route('courses.store')}}" method="POST">

        @csrf

        <div class="col-4">
            <label class="form-label" for="user_name">Título</label>
            <input type="text" class="form-control" name="name" id="user_name" required>
            <label class="form-label" for="user_name">Categoría</label>
            <input type="text" class="form-control" name="category" id="user_name" required>
        </div><br>
        <div class="col-4">
            <label for="inputDescription" class="form-label">Descripción</label>
            <textarea class="form-control" type="text" name="description" id="description" required></textarea><br>
            <div class="d-grid gap-2 d-md-block">
                <button type="submit" class="btn btn-primary" value="Add">Enviar</button>
                <a href="?action=home"><button class="btn btn-secondary">Cancel</button></a>   
            </div>
        </div>    

@endsection