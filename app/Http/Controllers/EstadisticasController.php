<?php

namespace App\Http\Controllers;

use App\Models\Estadisticas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EstadisticasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('estadisticas.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $estadistica = Estadisticas::create([
                'usuario' => Auth::user()->id,
                'altura' => $request['altura'],
                'peso' => $request['peso'],
                'edad' => $request['edad'],
                'km_corridos' => $request['km_corridos'],
                'km_bicicleta' => $request['km_bicicleta'],
                'meses_entrenando' => $request['meses_entrenando'],
            ]);
            $estadistica->save();
            return redirect(route('home'));
        } catch (\Exception $e) {
            dd($e);
            return redirect(route('login'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Estadisticas  $estadisticas
     * @return \Illuminate\Http\Response
     */
    public function show(Estadisticas $estadisticas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Estadisticas  $estadisticas
     * @return \Illuminate\Http\Response
     */
    public function edit(Estadisticas $estadisticas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Estadisticas  $estadisticas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estadisticas $estadisticas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Estadisticas  $estadisticas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estadisticas $estadisticas)
    {
        //
    }
}
