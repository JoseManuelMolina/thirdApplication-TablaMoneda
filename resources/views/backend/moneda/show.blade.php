@extends('backend.base')

@section('postscript')
<script src="{{ url('assets/backend/js/script.js?r=' . uniqid()) }}"></script>
@endsection

@section('content')

<form id="formDelete" action="{{ url('backend/moneda/' .$moneda->id) }}" method="post">
    @method('delete')
    @csrf
</form>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <a href="{{ url()->previous() }}" class="btn btn-primary">Atrás</a>
                <a href="{{ url('backend/moneda') }}" class="btn btn-primary">Monedas</a>
                <a href="#" data-id="{{ $moneda->id }}" data-name="{{ $moneda->name }}" class="btn btn-danger" id="enlaceBorrar">Eliminar Moneda</a>
            </div>
        </div>
    </div>
</div>
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">Campo</th>
            <th scope="col">Valor</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Nombre</td>
            <td>{{$moneda->nombre}}</td>
        </tr>
        <tr>
            <td>Símbolo</td>
            <td>{{$moneda->simbolo}}</td>
        </tr>
        <tr>
            <td>País</td>
            <td>{{$moneda->pais}}</td>
        </tr>
        <tr>
            <td>Cambio</td>
            <td>{{$moneda->cambio}}</td>
        </tr>
        <tr>
            <td>Fecha de creacion</td>
            <td>{{$moneda->fechaCreacion}}</td>
        </tr>

    </tbody>
</table>

@endsection