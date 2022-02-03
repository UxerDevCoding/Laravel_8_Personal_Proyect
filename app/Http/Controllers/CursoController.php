<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CursoController extends Controller
{
    public function index()
    {
        $course = Course::orderBy('id', 'desc')->paginate();
        return view('cursos.index', ['course'=> $course]);
    }

    public function create()
    {
        return view('cursos.create') ;
    }

    public function store(Request $request)
    {
        // return $request->all();
        $course = new Course();

        $course->name = $request->name;
        $course->description = $request->description;
        $course->category = $request->category;

        $course->save();

        return redirect()->route('courses.show', $course->id);

    }

    public function show($id)
    {
        $course = Course::find($id);
        return view('cursos.show', ['course'=> $course]);
    }

    public function edit($id)
    {
        $course = Course::find($id);

        return view('cursos.edit', ['course'=> $course]);
    }
    
    public function update(Request $request, $id)
    {
        $course = Course::find($id);

        $course->name = $request->name;
        $course->description = $request->description;
        $course->category = $request->category;

        $course->save();

        return redirect()->route('courses.show', $course->id);

    }


}

