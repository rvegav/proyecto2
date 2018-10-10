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
            <div class="form-group">
              <input type="text" name="primerNombre" class="form-control{{ $errors->has('primerNombre') ? ' is-invalid' : '' }}" value="{{ $cliente->primerNombre }}" placeholder="Primer Nombre del empleado" required>
                @if ($errors->has('primerNombre'))
                  <span class="invalid-feedback errors" role="alert">
                    <strong>{{ $errors->first('primerNombre') }}</strong>
                  </span>
                @endif
            </div>
          </div>

          <div class="col-md-2">
            <label for="func">Segundo Nombre</label>
            <div class="form-group">
              <input type="text" name="segundoNombre" class="form-control" value="{{ $cliente->segundoNombre }}" placeholder="Segundo Nombre">
            </div>
          </div>

          <div class="col-md-2">
            <label for="func">Primer Apellido</label>
            <div class="form-group">
              <input type="text" name="primerApellido" class="form-control{{ $errors->has('primerApellido') ? ' is-invalid' : '' }}" value="{{ $cliente->primerApellido }}" placeholder="Primer Apellido" required>
                @if ($errors->has('primerApellido'))
                  <span class="invalid-feedback errors" role="alert">
                    <strong>{{ $errors->first('primerApellido') }}</strong>
                  </span>
                @endif
            </div>
          </div>

          <div class="col-md-2">
            <label for="func">Segundo Apellido</label>
            <div class="form-group">
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
              <input type="text" size="19"  name="telefono" class="form-control{{ $errors->has('telefono') ? ' is-invalid' : '' }}" value="{{ $cliente->telefono }}" placeholder="Teléfono" required>
                @if ($errors->has('telefono'))
                  <span class="invalid-feedback errors" role="alert">
                      <strong>{{ $errors->first('telefono') }}</strong>
                  </span>
                @endif
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