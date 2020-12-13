@extends('backend.base')

@section('postscript')
<script src="{{ url('assets/backend/js/script.js?r=' . uniqid()) }}"></script>
@endsection

@section('content')
<h3 class="m-0 text-dark">Index Moneda</h3>
<br>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <a href="{{ url('backend/moneda/create') }}" class="btn btn-primary">Crear moneda</a>
            </div>
        </div>
    </div>
</div>

@if(session()->has('op'))
<div class="row">
    <div class="col-lg-12">
        <div class="alert alert-success" role="alert">
            Operation: {{ session()->get('op') }}. Id: {{ session()->get('id') }}. Result: {{ session()->get('r') }}
        </div>
    </div>
</div>
@endif

<table class="table table-hover">
    <thead>
        <tr>
            <th>#id</th>
            <th>nombre</th>
            <th>simbolo</th>
            <th>pais</th>
            <th>cambio</th>
            <th>fechaCreacion</th>
        </tr>
    </thead>
    <tbody>
        
        @foreach ($monedas as $moneda)
            <tr>
                <td scope="row">{{$moneda->id}}</td>
                <td>{{$moneda->nombre}}</td>
                <td>{{$moneda->simbolo}}</td>
                <td>{{$moneda->pais}}</td>
                <td>{{$moneda->cambio}}</td>
                <td>{{$moneda->fechaCreacion}}</td>
                <td><a href="{{ url('backend/moneda/' . $moneda->id) }}">Ver Más</a></td>
                <td><a href="{{ url('backend/moneda/' . $moneda->id . '/edit') }}">Editar</a></td>
                <td><a href="#" data-id="{{ $moneda->id }}" class="enlaceBorrar" >Borrar</a></td>
            </tr>
        @endforeach
        
    </tbody>
</table>

<form id="formDelete" action="{{ url('backend/moneda') }}" method="post">
    @method('delete')
    @csrf
</form>

@endsection