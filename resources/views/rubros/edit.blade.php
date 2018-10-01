@extends('layout')

@section('contenido')


<form method="POST" action="{{ route('rubros.update', $rubros->id) }}">
    {!! csrf_field() !!}
    {!! method_field('PUT') !!}

    <div class="container">
  <div class="row">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h1>Administración de Rubros</h1>
      </div>
     
      <div class="panel-body">
        <div class="col-md-2">
          <label for="func">Nombre del Rubro</label>
          <div class="input-group">
            <input type="text" name="nombre_rubro" class="form-control" value="{{ $rubros->nombre_rubro }}" placeholder="Nombre del rubro">
          </div>
        </div>
        <div class="col-md-2">
          <label for="func">Detalle del Rubro</label>
          <div class="input-group">
            <input type="text" name="detalle_rubro" class="form-control" value="{{ $rubros->detalle_rubro }}" placeholder="Detalle del rubro">
          </div>
        </div>
           <div class="row">
            <div class="col-md-5 col-md-offset-4">
              <button type="submit" class="btn button-primary">Guardar</button>
              <a class="btn button-primary" href="{{ route('rubros.edit', $rubros->id) }}">Cancelar</a>
              <a class="btn button-primary" href="{{ route('rubros.create') }}">Volver</a>
            </div>
          </div>
        <hr>

</form>
    </div>
  </div>
</div>
</div>

@stop