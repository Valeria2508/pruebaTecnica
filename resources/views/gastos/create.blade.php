<!-- resources/views/gastos/create.blade.php -->

@extends('layouts.app')  <!-- Extiende de un layout principal -->

@section('content')  <!-- Define el contenido de esta sección -->

<div class="container">
    <h2>Registrar un nuevo gasto</h2>

    <form action="{{ route('gastos.store') }}" method="POST">
        @csrf  <!-- Esto genera un token CSRF para proteger el formulario -->
        
        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <input type="text" name="descripcion" class="form-control" value="{{ old('descripcion') }}" required>
        </div>
        
        <div class="form-group">
            <label for="monto">Monto</label>
            <input type="number" name="monto" class="form-control" value="{{ old('monto') }}" required>
        </div>
        
        <div class="form-group">
            <label for="categoria">Categoría</label>
            <input type="text" name="categoria" class="form-control" value="{{ old('categoria') }}" required>
        </div>
        
        <div class="form-group">
            <label for="fecha">Fecha</label>
            <input type="date" name="fecha" class="form-control" value="{{ old('fecha') }}" required>
        </div>
        
        <button type="submit" class="btn btn-primary mt-3">Registrar gasto</button>
    </form>
</div>

@endsection  <!-- Cierra la sección de contenido -->
