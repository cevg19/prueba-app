<?php

namespace App\Http\Controllers;

use App\Models\Classrooms;
use App\Models\Courses;
use App\Models\Professors;
use App\Models\Students;
use App\Models\Hours;
use App\Models\Calendar;
use \Illuminate\Support\Carbon;


use Illuminate\Http\Request;

class CalendarController extends Controller
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
            ->paginate(10);


        $classrooms = Classrooms::all();
        $students = Students::all();
        $hours = Hours::all();
        $date = Carbon::now()->toArray();




        return view('calendar.index', compact('courses', 'classrooms', 'students', 'date', 'hours'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Courses::join('professors', 'courses.professor_id', '=', 'professors.id')
            ->select('courses.*', 'professors.Name')
            ->orderBy('id', 'DESC')
            ->paginate(10);


        $classrooms = Classrooms::all();
        $students = Students::all();
        $hours = Hours::all();
        $date = Carbon::now()->toArray();




        return view('calendar.create', compact('courses', 'classrooms', 'students', 'date', 'hours'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        /*  $request->validate([
            'classroom_id' => 'required|not_in:Seleccionar',
            'professor_id' => 'required|not_in:Seleccionar',
        ]); */
        // dd($request->toArray());

        $datos = $request->except('_token');

        Calendar::create($datos);

        return redirect()->route('calendar.index')->with('info', 'Curso creado con éxito!');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
