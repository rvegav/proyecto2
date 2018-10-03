@extends('layout')

@section('contenido')

	<form method="POST" action="{{ route('empleados.store') }}">
    {!! csrf_field() !!}
    <div class="container">
      <div class="row">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h1>Empleados</h1>
          </div>
          <div class="panel-body">
              <div class="col-md-2 col-md-offset-2">
                    <label for="">Primer Nombre</label>
                    <div class="form-group">
                        <input type="text" size="19"  class="form-control" value="" name="primerNombre" placeholder="Primer Nombre">
                    </div>
                  </div>

              <div class="col-md-2">
                <label for="">Segundo Nombre</label>
                <div class="form-group">
                  <input type="text" size="19"  class="form-control" name="segundoNombre" value="" placeholder="Segundo Nombre">
                </div>
              </div>

              <div class="col-md-2">
                <label for="" >Primer Apellido</label>
                <div class="form-group">
                  <input type="text" size="19" class="form-control" name="primerApellido" value="" placeholder="Primer Apellido">
                </div>
              </div>

              <div class="col-md-2">
                <label for="">Segundo Apellido</label>
                <div class="form-group">
                  <input type="text" size="19" class="form-control" name="segundoApellido" value="" placeholder="Segundo Apellido">
                </div>
              </div>

              <div class="col-md-3 col-md-offset-2">
                <label for=""  style="margin-top: 10px">Dirección</label>
                <div class="form-group">
                  <input type="text" size="35" class="form-control" name="direccion" value="" placeholder="Dirección">
                </div>
              </div>

              <div class="col-md-2">
                <label for="" style="margin-top: 10px">Teléfono</label>
                <div class="form-group">
                  <input type="text" size="19"  name="telefono" class="form-control" value="" placeholder="Teléfono">
                </div>
              </div>

              <div class="col-md-2">
                  <label for="sel1" style="margin-top: 10px">Rubro</label>
                <div class="form-group">
                  <select class="form-control" id="rubro_id" name="rubro_id">
                      @foreach ($rubros as $rubro) {
                         <option value={{$rubro->id}}>{{$rubro->nombre_rubro}}</option> 
                      }
                      @endforeach
                  </select>
                </div>
              </div>

              <div class="row">
                      <br>
              </div>

              <div class="row">
                <div class="col-md-4 col-md-offset-4" style="margin-top: 10px">
                  <button type="submit" class="btn button-primary">Guardar</button>
                  <a class="btn button-primary" href="{{ route('empleados.create') }}">Cancelar</a>
                  <button type="button" class="btn button-primary" id="volver" name="button">Volver</button>
                </div>
              </div>

              <br>
</form>

    <table class="table table-responsive">
    <thead>
      <tr>
        {{-- <th>Primer Nombre</th>
        <th>Segundo Nombre</th>
        <th>Primer Apellido</th>
        <th>Segundo Apellido</th> --}}
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Dirección</th>
        <th>Teléfono</th>
        <th>Rubro</th>
        <th>Acción</th>
      </tr>
    </thead>

      <tbody>
        @foreach($empleados as $empleado)
          @if($empleado->estado == 1)
            <tr>
              <td>{{ $empleado->primerNombre .' '.$empleado->segundoNombre }}</td>
              <td>{{ $empleado->primerApellido .' '.$empleado->segundoApellido }}</td>
              <td>{{ $empleado->direccion }}</td>
              <td>{{ $empleado->telefono }}</td>
              <td>{{ $empleado->rubro->nombre_rubro }}</td>
              <td>
                <a class="btn btn-link" href="{{ route('empleados.edit', $empleado->id) }}">Editar</a>

                <form style="display: inline" method="POST" action="{{ route('empleados.destroy', $empleado->id) }}">
                      {!! csrf_field() !!}
                      {!! method_field('DELETE') !!}
                      <button type="submit" class="btn button-primary">Eliminar</button>
                    </form>
              </td>
            </tr>
          @endif
          @endforeach
    </tbody>
  </table>

    </div>
  </div>
</div>
</div>
<script type="text/javascript">
  $("#volver").click(function(){
    $.ajax({
      url: "{{url()->current()}}",
      success: function(){
        window.location.replace("{{url()->previous()}}");
      }
    })
  })
</script>
@stop