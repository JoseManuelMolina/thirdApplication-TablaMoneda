@extends('backend.base')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <a href="{{ url()->previous() }}" class="btn btn-primary">Atrás</a>
                <a href="{{ url('backend/moneda') }}" class="btn btn-primary">Monedas</a>
            </div>
        </div>
    </div>
</div>

<form role="form" action="{{ url('backend/moneda') }}" method="post" id="createMonedaForm">
    @csrf
    <div class="card-body">
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" maxlength="60" minlength="2" required class="form-control" id="nombre" placeholder="Nombre de la moneda" name="nombre" value="{{ old('nombre') }}">
        </div>
        <div class="form-group">
            <label for="simbolo">Simbolo</label>
            <input type="text" maxlength="3" required class="form-control" id="simbolo" placeholder="Simbolo de la Moneda" name="simbolo" value="{{ old('simbolo') }}">
        </div>
        <div class="form-group">
            <label for="pais">Pais</label>
            <input type="string" maxlength="100" required class="form-control" id="pais" name="pais" placeholder="Pais de la moneda" value="{{ old('pais') }}">
        </div>
        <div class="form-group">
            <label for="cambio">Cambio</label>
            <input type="number" min="0.01" max="9999.99" step="0.01" required class="form-control" id="cambio" name="cambio" placeholder="Cambio de la moneda" value="{{ old('cambio') }}">
        </div>
        <div class="form-group">
            <label for="fechaCreacion">Fecha creacion</label>
            <input type="date" class="form-control" id="fechaCreacion" name="fechaCreacion" value="{{ old('fechaCreacion') }}" nullable>
        </div>
    </div>
    
    <!-- /.card-body -->
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Aceptar</button>
    </div>
</form>

@endsection