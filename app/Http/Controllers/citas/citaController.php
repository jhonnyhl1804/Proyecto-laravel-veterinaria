<?php

namespace App\Http\Controllers\citas;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cita\StoreRequest;
use App\Models\animal;
use App\Models\cita;
use App\Models\cliente;
use App\Models\medico;
use App\Models\servicio;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\VarDumper;

class citaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        echo "Inicio" ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $medicos = medico::pluck('id','nombre');
        $servicios = servicio::get();
        $clientes = cliente::get();
        $animals = animal::get();
        return view('citas.create', compact('medicos','servicios','animals','clientes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        //echo (request("fecha_agenda"));
        dd($request->all());
        //echo "Este es el Store" ;
    
        cita::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $cita = cita::findOrfail($id);
        return view($cita);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(cita $cita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, cita $cita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cita $cita)
    {
        //
    }
}
