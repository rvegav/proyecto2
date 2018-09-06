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
        <div class="col-md-3">
                <div class="form-group">
                  <label for="sel1">Rubro de los Empleados:</label>
                  <select class="form-control" id="rubro" name="rubro">
                    <option>Pintor</option>
                    <option>Electricista</option>
                    <option>Plomero</option>
                    <option>Carpintero</option>
                    <option>Albañil</option>
                  </select>
                </div>
              </div>
         <div class="col-md-2">
        <div class="row">
          <br>
        </div>
        <div class="row">
          <div class="col-md-3 col-md-offset-3">
            <input type="submit" class="btn btn-primary" value="Guardar">
            <button type="button" class="btn btn-primary" >Cancelar</button>
          </div>
        </div>
        <hr>

</form>
    </div>
  </div>
</div>
</div>

@stop