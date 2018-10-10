@extends('layout')

@section('contenido')


<form method="POST" action="{{ route('herramientas.update', $herramienta->id) }}">
    {!! csrf_field() !!}
    {!! method_field('PUT') !!}

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
            <input type="text" name="h_nombre" class="form-control" value={{"$herramienta->h_nombre"}} placeholder="Nombre de la herramienta">
          </div>
        </div>
        <div class="col-md-3">
          <label for="func">Marca</label>
          <div class="input-group">
            <input type="text" name="h_marca" class="form-control" value={{"$herramienta->h_marca"}} placeholder="Marca">
          </div>
        </div>
        <div class="col-md-3">
          <label for="func">Modelo</label>
          <div class="input-group">
            <input type="text" name="h_modelo" class="form-control" value={{"$herramienta->h_modelo"}} placeholder="Modelo">
          </div>
        </div>
        <div class="row">
          <br><br><br><br>
        </div>
        <div class="col-md-3 col-md-offset-2">
          <label for="func">Nro de Serie</label>
          <div class="input-group">
            <input type="text" name="h_nro_serie" class="form-control" value={{"$herramienta->h_nro_serie"}} placeholder="Nro de Serie">
          </div>
        </div>
        <div class="col-md-3">
          <label for="func">Fecha de Adquisición</label>
          <div class="input-group">
            <input type="date" name="h_fecha_adquisicion" class="form-control" value={{"$herramienta->h_fecha_adquisicion"}} placeholder="Fecha de Adquisición">
          </div>
        </div>
        <div class="col-md-3">
          <label for="func">Ubicación</label>
          <div class="input-group">
            <input type="text" name="h_ubicacion" class="form-control" value={{"$herramienta->h_ubicacion"}} placeholder="Ubicación">
          </div>
        </div>
        {{-- <div class="col-md-3">
          <label for="func">Cantidad</label>
          <div class="input-group">
            <input type="text" name="h_cantidad" class="form-control" value={{"$herramienta->h_cantidad"}} placeholder="Cantidad">
          </div>
        </div> --}}
        <div class="row">
          <br><br><br><br>
        </div>
        <div class="row">
          <div class="col-md-5 col-md-offset-4">
            <button type="submit" class="btn button-primary">Guardar</button>
            <a class="btn button-primary" href="{{ route('herramientas.edit', $herramienta->id) }}">Cancelar</a>
            <a class="btn button-primary" href="{{ route('herramientas.create') }}">Volver</a>
          </div>
        </div>
        <br>

</form>
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