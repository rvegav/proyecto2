@extends('layout')

@section('contenido')


<form method="POST" action="{{ route('maquinarias.update', $maquinaria->id) }}">
    {!! csrf_field() !!}
    {!! method_field('PUT') !!}

    <div class="container">
  <div class="row">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h1>Administración de Maquinarias</h1>
      </div>
     
      <div class="panel-body">
        <div class="col-md-3 col-md-offset-1">
          <label for="func">Nombre Maquinaria</label>
          <div class="input-group">
            <input type="text" name="ma_nombre" class="form-control" value="{{$maquinaria->ma_nombre}}" placeholder="Nombre Maquinaria">
          </div>
        </div>
        <div class="col-md-3">
          <label for="func">Marca</label>
          <div class="input-group">
            <input type="text" name="ma_marca" class="form-control" value="{{$maquinaria->ma_marca}}" placeholder="Marca de la maquinaria">
          </div>
        </div>
        <div class="col-md-3">
          <label for="func">Modelo</label>
          <div class="input-group">
            <input type="text" name="ma_modelo" class="form-control" value="{{$maquinaria->ma_modelo}}" placeholder="Modelo de la maquinaria">
          </div>
        </div>
        <div class="row">
          <br><br><br><br>
        </div>
        <div class="col-md-3 col-md-offset-1">
          <label for="func">Fecha de Adquisición</label>
          <div class="input-group">
            <input type="Date" name="ma_fecha_adquisicion" class="form-control " value="{{$maquinaria->ma_fecha_adquisicion}}" placeholder="Fecha de la adquisición de la maquinaria">
          </div>
        </div>        
        <div class="col-md-3">
          <label for="func">Distancia realizada</label>
          <div class="input-group">
            <input type="text" name="ma_distancia" class="form-control" value="{{$maquinaria->ma_distancia}}" placeholder="Kilometraje">
          </div>
        </div>
        <div class="col-md-3">
          <label for="func">Fecha de Mantenimiento</label>
          <div class="input-group">
            <input type="date" name="ma_fecha_mantenimiento" class="form-control" value="{{$maquinaria->ma_fecha_mantenimiento}}" placeholder="Fecha de mantenimiento de la maquinaria">
          </div>
        </div>
        <div class="row">
          <br><br><br><br>
        </div>
        <div class="row">
          <div class="col-md-5 col-md-offset-4">
            <input type="submit" class="btn button-primary" value="Guardar">
            <a class="btn button-primary" href="{{ route('maquinarias.edit', $maquinaria->id) }}">Cancelar</a>
            <button type="button" class="btn button-primary" id="volver" name="button">Volver</button>
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