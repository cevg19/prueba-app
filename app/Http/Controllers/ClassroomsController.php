<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classrooms;

class ClassroomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classrooms = Classrooms::orderBy('id', 'DESC')->paginate(10);
        return view('classrooms.index', compact('classrooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('classrooms.create');
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
            'number' => 'required'
        ]);

        $datos = $request->except('_token');

        Classrooms::create($datos);
        return redirect()->route('classrooms.index')->with('info', 'Salon creado con éxito!');
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
        $classrooms = Classrooms::findOrFail($id);

        return view('classrooms.edit', compact('classrooms'));
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
            'number' => 'required'
        ]);

        $classrooms = Classrooms::findOrFail($id);
        $classrooms->update($request->all());


        return redirect()->route('classrooms.index', $classrooms)->with('info', 'Se actualizó el salón de clases');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $classrooms = Classrooms::find($id);
        $classrooms->delete();

        return redirect()->route('classrooms.index')->with('info', 'El salón fue eliminado');
    }
}
