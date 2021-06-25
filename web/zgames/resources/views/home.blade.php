@extends('layout.master')
@section('title', 'Registrar Consola')
@section('content')
<form>
    <legend>Registrar Consola</legend>
    <div class="form-group">
        <label class="form-label" for="nombre">Nombre</label>
        <input name="nombre" class="form-control" type="text" id="nombre">
    </div>
    <div class="form-group">
        <label class="form-label" for="marca-select">Marca</label>
        <select name="marca-select" class="form-control" id="marca-select">
        </select>
    </div>
    <div class="form-group">
        <label class="form-label" for="anno">Año Lanzamiento</label>
        <input name="anno" type="number" id="anno" class="form-control">
    </div>
    <button id="registrar-btn" type="button" class="btn btn-primary float-right">Agregar</button>
</form>
@endsection

@section('javascript')
    <script src="{{asset('js/servicios/consolasService.js')}}"></script>
    <script src="{{asset('js/home.js')}}"></script>
@endsection