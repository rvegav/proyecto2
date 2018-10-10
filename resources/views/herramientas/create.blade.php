@extends('layout')

@section('contenido')

  <form method="POST" action="{{ route('herramientas.store') }}">
    {!! csrf_field() !!}
  {{--           $table->string('h_nombre');
  //           $table->string('h_marca');
  //           $table->string('h_modelo')->nullable();
  //           $table->string('h_nro_serie')->nullable();
  //           $table->date('h_fecha_adquisicion');
  //           $table->string('h_estado_herramienta')->default('DISPONIBLE');
  //           $table->string('ubicacion')->default('DEPOSITO CENTRAL');
  //           $table->integer('cantidad'); --}}
<div class="container">
  <div class="row">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h1>Administración de Herramientas</h1>
      </div>
     
      <div class="panel-body">
        <div class="col-md-3 col-md-offset-2">
          <label for="func">Nombre de la herramienta</label>
          <div class="input-group">
            <input type="text" name="h_nombre" class="form-control" value="" placeholder="Nombre de la herramienta">
          </div>
        </div>
        <div class="col-md-3">
          <label for="func">Marca</label>
          <div class="input-group">
            <input type="text" name="h_marca" class="form-control" value="" placeholder="Marca">
          </div>
        </div>
        <div class="col-md-3">
          <label for="func">Modelo</label>
          <div class="input-group">
            <input type="text" name="h_modelo" class="form-control" value="" placeholder="Modelo">
          </div>
        </div>
        <div class="row">
          <br><br><br><br>
        </div>
        <div class="col-md-3 col-md-offset-2">
          <label for="func">Nro de Serie</label>
          <div class="input-group">
            <input type="text" name="h_nro_serie" class="form-control" value="" placeholder="Nro de Serie">
          </div>
        </div>
        <div class="col-md-3 ">
          <label for="func">Fecha de Adquisición</label>
          <div class="input-group">
            <input type="date" name="h_fecha_adquisicion" class="form-control" value="" placeholder="Fecha de Adquisición">
          </div>
        </div>
        <div class="col-md-3">
          <label for="func">Ubicación</label>
          <div class="input-group">
            <input type="text" name="h_ubicacion" class="form-control" value="" placeholder="Ubicación">
          </div>
        </div>
        {{-- <div class="col-md-3">
          <label for="func">Cantidad</label>
          <div class="input-group">
            <input type="text" name="h_cantidad" class="form-control" value="" placeholder="Cantidad">
          </div>
        </div> --}}
        <div class="row">
          <br><br><br><br>
        </div>
        <div class="row">
          <div class="col-md-5 col-md-offset-4">
            <input class="btn button-primary" value="Guardar" type="submit">
            <a class="btn button-primary" href="{{ route('herramientas.create') }}">Cancelar</a>
            <button type="button" class="btn button-primary" id="volver" name="button">Volver</button>
          </div>
        </div>
       <br>
  </form>

    <table class="table table-responsive">
    <thead>
      <tr>
          <th>Nombre de la herramienta</th>
          <th>Marca</th>
          <th>Modelo</th>
          <th>Nro de Serie</th>
          <th>Fecha de Adquisición</th>
          <th>Ubicación</th>
          <th>Cantidad</th>
          <th>Acción</th>
      </tr>
    </thead>
          
    <tbody>
      @foreach($herramientas as $herramienta)
        @if($herramienta->h_estado)
        
        <tr>
          <td>{{ $herramienta->h_nombre }}</td>
          <td>{{ $herramienta->h_marca}}</td>
          <td>{{ $herramienta->h_modelo }}</td>
          <td>{{ $herramienta->h_nro_serie }}</td>
          <td>{{ $herramienta->h_fecha_adquisicion }}</td>
          <td>{{ $herramienta->h_ubicacion }}</td>
          <td>{{ $herramienta->h_cantidad }}</td>

          <td>
            <a class="btn btn-link" href="{{ route('herramientas.edit', $herramienta->id) }}">Editar</a>

            <form style="display: inline" method="POST" action="{{ route('herramientas.destroy', $herramienta->id) }}">
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