<!-- resources/views/gastos/edit.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Editar Gasto</h2>

    <form action="{{ route('gastos.update', $gasto->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <input type="text" name="descripcion" class="form-control" value="{{ old('descripcion', $gasto->descripcion) }}" required>
        </div>

        <div class="form-group">
            <label for="monto">Monto</label>
            <input type="number" name="monto" class="form-control" value="{{ old('monto', $gasto->monto) }}" required>
        </div>

        <div class="form-group">
            <label for="categoria">Categoría</label>
            <input type="text" name="categoria" class="form-control" value="{{ old('categoria', $gasto->categoria) }}" required>
        </div>

        <div class="form-group">
            <label for="fecha">Fecha</label>
            <input type="date" name="fecha" class="form-control" value="{{ old('fecha', $gasto->fecha) }}" required>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Actualizar gasto</button>
    </form>
</div>
@endsection
