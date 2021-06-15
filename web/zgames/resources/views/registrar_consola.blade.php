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
        <label class="form-label" for="marca-select">Marca</label>
        <select class="form-control" id="marca-select">
        </select>
    </div>
    <div class="form-group">
        <label class="form-label" for="año">Año Lanzamiento</label>
        <input type="number" id="año" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary float-right">Agregar</button>
</form>
@endsection
@section('javascript')
    <script src="{{asset('js/home.js')}}"></script>
@endsection