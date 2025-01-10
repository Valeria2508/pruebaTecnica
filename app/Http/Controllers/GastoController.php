<?php

namespace App\Http\Controllers;

use App\Models\Gasto;
use Illuminate\Http\Request;

class GastoController extends Controller
{
    //muestra el formulario para crear los gastos
    public function create()
    {
        return view('gastos.create');//// Devuelve la vista del formulario de creación
    }

        public function store(Request $request)
    {
        $request->validate([
            'descripcion' => 'required|string|max:255',
            'monto' => 'required|numeric|min:0.01',
            'categoria' => 'required|string|max:255',
            'fecha' => 'required|date',
        ]);

        // Usar only() para asegurar que solo los campos esperados sean guardados
        Gasto::create($request->only(['descripcion', 'monto', 'categoria', 'fecha']));

        return redirect()->route('gastos.index');
    }


     // Muestra la lista de todos los gastos registrados
        public function index()
     {
         // Obtén todos los gastos ordenados por fecha descendente
         $gastos = Gasto::orderBy('fecha', 'desc')->get();
     
         // Calcula el total de todos los gastos
         $total = Gasto::sum('monto');
     
         // Calcula los totales por categoría
         $totalesPorCategoria = Gasto::selectRaw('categoria, sum(monto) as total')
                                     ->groupBy('categoria')
                                     ->get();
     
         // Devuelve la vista con los gastos, el total general y los totales por categoría
         return view('gastos.index', compact('gastos', 'total', 'totalesPorCategoria'));
     }
     
     

        public function filter(Request $request)
     {
         $request->validate([
             'fecha_inicio' => 'nullable|date',
             'fecha_fin' => 'nullable|date|after_or_equal:fecha_inicio',
         ]);
     
         $query = Gasto::query();
     
         if ($request->has('categoria')) {
             $query->where('categoria', $request->categoria);
         }
     
         if ($request->has('fecha_inicio') && $request->has('fecha_fin')) {
             $query->whereBetween('fecha', [$request->fecha_inicio, $request->fecha_fin]);
         }
     
         $gastos = $query->get();
         return view('gastos.index', compact('gastos'));
     }
     
        public function edit($id)
    {
        $gasto = Gasto::findOrFail($id);
        return view('gastos.edit', compact('gasto'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'descripcion' => 'required|string|max:255',
            'monto' => 'required|numeric|min:0.01',
            'categoria' => 'required|string|max:255',
            'fecha' => 'required|date',
        ]);

        $gasto = Gasto::findOrFail($id);
        $gasto->update($request->all());
        return redirect()->route('gastos.index');
    }

    public function destroy($id)
    {
        $gasto = Gasto::findOrFail($id);
        $gasto->delete();
        return redirect()->route('gastos.index');
    }



}
