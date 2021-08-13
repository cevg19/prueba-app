<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courses;
use App\Models\Professors;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $courses = Courses::join('professors', 'courses.professor_id', '=', 'professors.id')
            ->select('courses.*', 'professors.Name')
            ->orderBy('id', 'DESC')
            ->paginate(3);

        /*  $courses = Courses::orderBy('id', 'DESC')
            ->paginate(10); */
        return view('courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $professors = Professors::all();

        return view('courses.create', compact('professors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'professor_id' => 'required|not_in:Seleccionar',
        ]);

        $datos = $request->except('_token');

        Courses::create($datos);

        return redirect()->route('courses.index')->with('info', 'Curso creado con éxito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $courses = Courses::findOrFail($id);
        $professors = Professors::all();

        return view('courses.edit', compact('courses', 'professors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'number' => 'required',
            'professor_id' => 'required|not_in:Seleccionar',
        ]);

        $courses = Courses::findOrFail($id);
        $courses->update($request->all());


        return redirect()->route('courses.index', $courses)->with('info', 'Se actualizó el curso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $courses = Courses::find($id);
        $courses->delete();

        return redirect()->route('courses.index')->with('info', 'El curso fue eliminado');
    }
}
