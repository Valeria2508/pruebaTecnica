<!-- resources/views/gastos/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Crear Gasto</h1>

    <form action="{{ route('gastos.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion" required>
        </div>

        <div class="form-group">
            <label for="monto">Monto</label>
            <input type="number" step="0.01" class="form-control" id="monto" name="monto" required>
        </div>

        <div class="form-group">
            <label for="categoria">Categoría</label>
            <select class="form-control" id="categoria" name="categoria" required>
                <option value="Comida">Comida</option>
                <option value="Transporte">Transporte</option>
                <option value="Ocio">Ocio</option>
                <!-- Puedes agregar más categorías aquí -->
            </select>
        </div>

        <div class="form-group">
            <label for="fecha">Fecha</label>
            <input type="date" class="form-control" id="fecha" name="fecha" required>
        </div>

        <button type="submit" class="btn btn-primary">Guardar Gasto</button>
    </form>
@endsection
