@extends('layout.master')
@section('title', 'Registrar Consola')
@section('content')
<form>
    <legend>Registrar Consola</legend>
    <div class="form-group">
        <label class="form-label" for="nombre">Nombre</label>
        <input class="form-control" type="text" id="nombre">
    </div>
    <div class="form-group">
        <label class="form-label" for="marca">Marca</label>
        <select class="form-control" id="marca">
            <option value="1">Microsoft</option>
            <option value="2">Sony</option>
            <option value="3">Nintendo</option>
        </select>
    </div>
    <div class="form-group">
        <label class="form-label" for="año">Año Lanzamiento</label>
        <input type="number" id="año" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary float-right">Agregar</button>
</form>
@endsection