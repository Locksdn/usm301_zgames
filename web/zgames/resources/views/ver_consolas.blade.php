@extends('layout.master')
@section('title', 'Ver Consolas')
@section('content')
    <div class="col-12 col-md-12 col-lg-6 mx-auto">
        <table class="table table-hover table-boldered">
            <thead class="bg-info text-white">
                <tr>
                    <td>Nombre</td>
                    <td>Marca</td>
                    <td>Año de Lanzamiento</td>
                    <td>Acciones</td>
                </tr>
            </thead>
            <tbody id="tbody-consolas">

            </tbody>
        </table>
    </div>
@endsection

@section('javascript')
    <script src="{{asset('js/servicios/consolasService.js')}}"></script>
    <script src="{{asset('js/ver_consolas.js')}}"></script>
@endsection