@extends('layouts.app')

@section('title', 'course')
    
@section('content')
    <h1>Página principal del curso</h1>
    <a href="{{route('courses.create')}}">Crear Curso</a>
    <ul>
        @foreach ($course as $item)
            <li>
                {{-- {{$item->name}} --}}
                <a href="{{route('courses.show', $item->id)}}">{{$item->name}}</a>
            </li>
        @endforeach
    </ul>
    
    {{$course->links()}}
    
@endsection