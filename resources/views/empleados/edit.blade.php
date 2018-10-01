@extends('layout')

@section('contenido')


<form method="POST" action="{{ route('empleados.update', $empleado->id) }}">
  {!! csrf_field() !!}
  {!! method_field('PUT') !!}

  <div class="container">
    <div class="row">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h1>Administración de Empleados</h1>
        </div>

        <div class="panel-body">
          <div class="col-md-2">
            <label for="func">Primer Nombre</label>
            <div class="input-group">
              <input type="text" name="primerNombre" class="form-control" value="{{ $empleado->primerNombre }}" placeholder="Primer Nombre del empleado">
            </div>
          </div>
          <div class="col-md-2">
            <label for="func">Segundo Nombre</label>
            <div class="input-group">
              <input type="text" name="segundoNombre" class="form-control" value="{{ $empleado->segundoNombre }}" placeholder="Segundo Nombre">
            </div>
          </div>
          <div class="col-md-2">
            <label for="func">Primer Apellido</label>
            <div class="input-group">
              <input type="text" name="primerApellido" class="form-control" value="{{ $empleado->primerApellido }}" placeholder="Primer Apellido">
            </div>
          </div>
          <div class="col-md-2">
            <label for="func">Segundo Apellido</label>
            <div class="input-group">
              <input type="text" name="segundoApellido" class="form-control" value="{{ $empleado->segundoApellido }}" placeholder="Segundo Apellido">
            </div>
          </div>
          <div class="col-md-2">
            <label for="sel1" >Rubro</label>
            <div class="form-group">
              <select class="form-control" id="rubro_id" name="rubro_id">
                @foreach ($rubros as $rubro)
                <option value={{$rubro->id}}>{{$rubro->nombre_rubro}}</option> 
                @endforeach
              </select>
            </div>
          </div>
          
          <div class="row">
            <div class="col-md-5 col-md-offset-4">
              <button type="submit" class="btn button-primary">Guardar</button>
              <a class="btn button-primary" href="{{ route('empleados.edit', $empleado->id) }}">Cancelar</a>
              <a class="btn button-primary" href="{{ route('empleados.create') }}">Volver</a>
            </div>
          </div>
          <br>

        </form>
      </div>
    </div>
  </div>
</div>

@stop