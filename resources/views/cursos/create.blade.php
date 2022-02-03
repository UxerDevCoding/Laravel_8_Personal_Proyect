@extends('layouts.app')

@section('title', 'course create')
    
@section('content')

    <div class="container mt-3"> 
        <h2 class="d-flex justify-content-center mt-5">Página principal para crear cursos</h2>
        <a href="{{route('courses.index')}}"><button class="btn btn-secondary">Volver a Cursos</button></a>   
        
        <form action="{{route('courses.store')}}" method="POST">
            
            @csrf
            
            <div class="col-4">
                <label class="form-label mt-3" for="user_name">Título</label>
                <input type="text" class="form-control" name="name" id="user_name" required>
                <label class="form-label" for="user_name">Categoría</label>
                <input type="text" class="form-control" name="category" id="user_name" required>
            </div><br>
            <div class="col-4">
                <label for="inputDescription" class="form-label">Descripción</label>
                <textarea class="form-control" type="text" name="description" id="description" required></textarea><br>
                <div class="d-grid gap-2 d-md-block">
                    <button type="submit" class="btn btn-primary" value="Add">Crear</button>
                </div>
            </div>  
        </form>      
    <div>
@endsection