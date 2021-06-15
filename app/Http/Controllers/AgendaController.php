<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agendas = Agenda::get();
        return view("agenda.index")->withAgendas($agendas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("agenda.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Agenda::create([
            'nombre' => $input['nombre'],
            'apellidos' => $input['apellidos'],
            'sexo' => $input['sexo'],
            'celular' => $input['celular'],
            'direccion' => $input['direccion']
        ]);
       
        return redirect(route('agenda.index'));
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
        $agenda=Agenda::find($id);
        return view('agenda.edit')->withAgenda($agenda);
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
        $agenda=Agenda::find($id);
        $input = $request->all();
        $agenda->nombre=$input['nombre'];
        $agenda->apellidos=$input['apellidos'];
        $agenda->sexo=$input['sexo'];
        $agenda->celular=$input['celular'];
        $agenda->direccion=$input['direccion'];
        $agenda->save();
        return redirect(route('agenda.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $agenda=Agenda::find($id);
        $agenda->delete();
        return redirect(route('agenda.index'));
    }
}
