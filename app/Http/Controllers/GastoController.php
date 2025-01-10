<?php

namespace App\Http\Controllers;

use App\Models\Gasto;
use App\Models\Categoria;
use Illuminate\Http\Request;


class GastoController extends Controller
{
    //muestra el formulario para crear los gastos
    public function create()
    {
        // Obtiene todas las categorías de la base de datos
        $categorias = Categoria::all(); 

        // Pasamos las categorías a la vista
        return view('gastos.create', compact('categorias'));
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
        public function index(Request $request)
     {
         $query = Gasto::query();
     
         if ($request->filled('categoria')) {
             $query->where('categoria', $request->categoria);
         }
     
         if ($request->filled('fecha_inicio') && $request->filled('fecha_fin')) {
             $query->whereBetween('fecha', [$request->fecha_inicio, $request->fecha_fin]);
         }
     
         $gastos = $query->orderBy('fecha', 'desc')->get();
         $total = $gastos->sum('monto');
         $totalesPorCategoria = $gastos->groupBy('categoria')->map->sum('monto');
     
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
public function show($id)
{
    // Buscar el gasto con el ID proporcionado
    $gasto = Gasto::findOrFail($id);

    // Retornar la vista con el gasto encontrado
    return view('gastos.show', compact('gasto'));
}


}
