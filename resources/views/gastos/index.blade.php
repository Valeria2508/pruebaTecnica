@extends('layouts.app')

@section('content')
<div class="container" style="max-width: 1000px; margin: 50px auto;">
    <h2 style="text-align: center; margin-bottom: 30px;">Lista de Gastos</h2>

    <!-- Botón para añadir un nuevo gasto -->
    <a href="{{ route('gastos.create') }}" style="display: inline-block; padding: 10px 20px; background-color: #4CAF50; color: white; text-decoration: none; border-radius: 5px; margin-bottom: 20px;">Añadir Gasto</a>

    <!-- Filtro de categorías -->
    <form action="{{ route('gastos.index') }}" method="GET" style="margin-bottom: 20px;">
        <label for="categoria" style="margin-right: 10px;">Categoría:</label>
        <select name="categoria" id="categoria" style="padding: 8px; margin-right: 10px;">
            <option value="">Todas las categorías</option>
            <option value="Comida">Comida</option>
            <option value="Transporte">Transporte</option>
            <option value="Ocio">Ocio</option>
        </select>
        
        <label for="fecha_inicio" style="margin-right: 10px;">Desde:</label>
        <input type="date" name="fecha_inicio" style="padding: 8px; margin-right: 10px;">

        <label for="fecha_fin" style="margin-right: 10px;">Hasta:</label>
        <input type="date" name="fecha_fin" style="padding: 8px; margin-right: 10px;">
        
        <button type="submit" style="padding: 10px 15px; background-color: #2196F3; color: white; border: none; border-radius: 5px;">Filtrar</button>
    </form>

    @php
        $gastos = session('gastos', $gastos);
        $total = session('total', $total);
        $totalesPorCategoria = session('totalesPorCategoria', $totalesPorCategoria);
    @endphp

    <!-- Tabla de gastos -->
    <table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
        <thead>
            <tr style="background-color: #f2f2f2;">
                <th style="padding: 10px; text-align: left; border: 1px solid #ddd;">Descripción</th>
                <th style="padding: 10px; text-align: left; border: 1px solid #ddd;">Monto</th>
                <th style="padding: 10px; text-align: left; border: 1px solid #ddd;">Categoría</th>
                <th style="padding: 10px; text-align: left; border: 1px solid #ddd;">Fecha</th>
                <th style="padding: 10px; text-align: left; border: 1px solid #ddd;">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($gastos as $gasto)
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;">{{ $gasto->descripcion }}</td>
                    <td style="padding: 10px; border: 1px solid #ddd;">{{ number_format($gasto->monto, 0, ',', '.') }} COP</td>
                    <td style="padding: 10px; border: 1px solid #ddd;">{{ $gasto->categoria }}</td>
                    <td style="padding: 10px; border: 1px solid #ddd;">{{ \Carbon\Carbon::parse($gasto->fecha)->format('d/m/Y') }}</td>
                    <td style="padding: 10px; border: 1px solid #ddd;">
                        <a href="{{ route('gastos.edit', $gasto->id) }}" style="padding: 5px 10px; background-color: #FFC107; color: white; text-decoration: none; border-radius: 3px;">Editar</a>
                        <form action="{{ route('gastos.destroy', $gasto->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('¿Estás seguro de eliminar este gasto?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="padding: 5px 10px; background-color: #F44336; color: white; border: none; border-radius: 3px;">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Total de gastos -->
    <div style="text-align: right; font-weight: bold; font-size: 16px;">
        <p>Total Gastado: {{ number_format($total, 0, ',', '.') }} COP</p>
    </div>
</div>
@endsection
