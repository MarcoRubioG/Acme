<?php

namespace App\Http\Controllers;

use App\Models\Plano;
use App\Models\Proyecto;
use Illuminate\Http\Request;

class PlanosController extends Controller
{
    public function getPlanos()
    {
        $data = Plano::all();
        
        return view("Admin.planos")
            ->with('planos', $data);
    }

    public function destroy($id)
    {
        $plano = Plano::findOrFail($id);
        $plano->delete();
        
        return redirect('/dashboard/planos')->with('success', 'Plano eliminado correctamente');
    }
    
    public function store(Request $request)
    {
        $data = $request->all();
        
        $primerProyecto = Proyecto::first();
        
        if ($primerProyecto) {
            $data['proyecto_id'] = $primerProyecto->id;
        } else {
            $proyectoTemp = Proyecto::create(['nombre' => 'Proyecto Temporal']);
            $data['proyecto_id'] = $proyectoTemp->id;
        }
        
        Plano::create($data);
        
        return redirect('/dashboard/planos')->with('success', 'Plano creado correctamente');
    }
}