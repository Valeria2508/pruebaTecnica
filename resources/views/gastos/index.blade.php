<!-- resources/views/gastos/index.blade.php -->

@extends('layouts.app')

@section('content')
<h1>Lista de Gastos</h1>

<table class="table">
    <thead>
        <tr>
            <th>Descripción</th>
            <th>Monto</th>
            <th>Categoría</th>
            <th>Fecha</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($gastos as $gasto)
            <tr>
                <td>{{ $gasto->descripcion }}</td>
                <td>{{ $gasto->monto }}</td>
                <td>{{ $gasto->categoria }}</td>
                <td>{{ $gasto->fecha }}</td>
                <td>
                    <a href="{{ route('gastos.edit', $gasto->id) }}" class="btn btn-primary">Editar</a>
                    <form action="{{ route('gastos.destroy', $gasto->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<h3>Total: ${{ $total }}</h3>

<h3>Totales por Categoría</h3>
<table class="table">
    <thead>
        <tr>
            <th>Categoría</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($totalesPorCategoria as $totalCategoria)
            <tr>
                <td>{{ $totalCategoria->categoria }}</td>
                <td>${{ $totalCategoria->total }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

<a href="{{ route('gastos.create') }}" class="btn btn-success">Crear Gasto</a>
@endsection
