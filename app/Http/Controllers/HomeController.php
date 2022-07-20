<?php

namespace App\Http\Controllers;

use App\Models\Ejercicio;
use App\Models\Estadisticas;
use App\Models\User;
use App\Models\Rutina;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
              
        $estadisticas = Estadisticas::select()->where('usuario' , Auth::user()->id)->latest()->get();
        $rutinas = Rutina::get()->where('usuario' , Auth::user()->id)->groupBy('fecha');
        if (isset($rutinas)) {
            foreach ($rutinas as $rutina) {
                for ($i = 0; $i < count($rutina); $i++) { 
                    $rutina[$i]['ejercicio'] = Ejercicio::findOrFail($rutina[$i]->ejercicio);
                }
            }
        }
        $ejercicios = Ejercicio::get();
        $usuario = User::find(Auth::user()->id);
        return view('home' , compact('estadisticas' , 'usuario' , 'rutinas', 'ejercicios'));
    }
}
