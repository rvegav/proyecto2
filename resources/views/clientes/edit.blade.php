@extends('layout')

@section('contenido')


<form method="POST" action="{{ route('clientes.update', $cliente->id) }}">
  {!! csrf_field() !!}
  {!! method_field('PUT') !!}

  <div class="container">
    <div class="row">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h1>Clientes</h1>
        </div>

        <div class="panel-body">
          <div class="col-md-2 col-md-offset-2">
            <label for="func">Primer Nombre</label>
            <div class="input-group">
              <input type="text" name="primerNombre" class="form-control" value="{{ $cliente->primerNombre }}" placeholder="Primer Nombre del empleado">
            </div>
          </div>
          <div class="col-md-2">
            <label for="func">Segundo Nombre</label>
            <div class="input-group">
              <input type="text" name="segundoNombre" class="form-control" value="{{ $cliente->segundoNombre }}" placeholder="Segundo Nombre">
            </div>
          </div>
          <div class="col-md-2">
            <label for="func">Primer Apellido</label>
            <div class="input-group">
              <input type="text" name="primerApellido" class="form-control" value="{{ $cliente->primerApellido }}" placeholder="Primer Apellido">
            </div>
          </div>
          <div class="col-md-2">
            <label for="func">Segundo Apellido</label>
            <div class="input-group">
              <input type="text" name="segundoApellido" class="form-control" value="{{ $cliente->segundoApellido }}" placeholder="Segundo Apellido">
            </div>
          </div>

          <div class="col-md-3 col-md-offset-2">
            <label for=""  style="margin-top: 10px">Dirección</label>
            <div class="form-group">
                  <input type="text" size="35" class="form-control" name="direccion" value="{{ $cliente->direccion }}" placeholder="Dirección">
            </div>
          </div>

          <div class="col-md-2">
            <label for="" style="margin-top: 10px">Teléfono</label>
            <div class="form-group">
                  <input type="text" size="19"  name="telefono" class="form-control" value="{{ $cliente->telefono }}" placeholder="Teléfono">
            </div>
          </div>

          <div class="row">
            <br>
          </div>

          <div class="row">
            <div class="col-md-5 col-md-offset-4">
              <button type="submit" class="btn button-primary">Guardar</button>
              <a class="btn button-primary" href="{{ route('clientes.edit', $cliente->id) }}">Cancelar</a>
              <a class="btn button-primary" href="{{ route('clientes.create') }}">Volver</a>
            </div>
          </div>
          <br>

        </form>
      </div>
    </div>
  </div>
</div>

@stop