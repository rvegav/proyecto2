@extends('layout')

@section('contenido')

	<form method="POST" action="{{ route('clientes.store') }}">
    {!! csrf_field() !!}
    <div class="container">
      <div class="row">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h1>Clientes</h1>
          </div>
          <div class="panel-body">
              <div class="col-md-2 col-md-offset-2">
                    <label for="">Primer Nombre</label>
                    <div class="form-group">
                      <input type="text" size="19"  class="form-control{{ $errors->has('primerNombre') ? ' is-invalid' : '' }}" value="" name="primerNombre" placeholder="Primer Nombre" required>
                      @if ($errors->has('primerNombre'))
                        <span class="invalid-feedback errors" role="alert">
                          <strong>{{ $errors->first('primerNombre') }}</strong>
                        </span>
                      @endif
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
                  <input type="text" size="19" class="form-control{{ $errors->has('primerApellido') ? ' is-invalid' : '' }}" name="primerApellido" value="" placeholder="Primer Apellido" required>
                    @if ($errors->has('primerApellido'))
                      <span class="invalid-feedback errors" role="alert">
                        <strong>{{ $errors->first('primerApellido') }}</strong>
                      </span>
                    @endif
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
                  <input type="text" size="19"  name="telefono" class="form-control{{ $errors->has('telefono') ? ' is-invalid' : '' }}" value="" placeholder="Teléfono" required>
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
                <div class="col-md-4 col-md-offset-4" style="margin-top: 10px">
                  <button type="submit" class="btn button-primary">Guardar</button>
                  <a class="btn button-primary" href="{{ route('clientes.create') }}">Cancelar</a>
                  <button type="button" class="btn button-primary" id="volver" name="button">Volver</button>
                </div>
              </div>

              <br>
</form>

    <table class="table table-responsive">
    <thead>
      <tr>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Dirección</th>
        <th>Teléfono</th>
        <th>Acción</th>
      </tr>
    </thead>

      <tbody>
        @foreach($clientes as $cliente)
          @if($cliente->estado == 1)
            <tr>
              <td>{{ $cliente->primerNombre .' '.$cliente->segundoNombre }}</td>
              <td>{{ $cliente->primerApellido .' '.$cliente->segundoApellido }}</td>
              <td>{{ $cliente->direccion }}</td>
              <td>{{ $cliente->telefono }}</td>
              <td>
                <a class="btn btn-link" href="{{ route('clientes.edit', $cliente->id) }}">Editar</a>

                <form style="display: inline" method="POST" action="{{ route('clientes.destroy', $cliente->id) }}">
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