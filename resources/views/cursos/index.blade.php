@extends('layouts.app')

@section('title', 'course')
    
@section('content')
    <h1 class="d-flex justify-content-center mt-5">Página principal del curso</h1>

    <a href="{{route('courses.create')}}" class="d-flex justify-content-center mt-4"><button class="btn btn-primary">Crear Curso</button></a>
        @foreach ($course as $item)
            <div class="container my-5">
                
                {{-- {{$item->name}} --}}
                {{-- <a href="{{route('courses.show', $item->id)}}">{{$item->name}}</a> --}}
                 
                    <div class="card text-center shadow">
                        <div class="card-body">
                            <h5 class="card-title text-primary lead">{{$item->name}}</h5>
                            <h5 class="lead text-secondary">{{$item->category}}</h5>
                            <p class="lead text-secondary">{{$item->description}}</p>

                        </div>
                    </div> 
               
           </div>
        @endforeach
    
    
    {{$course->links()}}

    
    
@endsection