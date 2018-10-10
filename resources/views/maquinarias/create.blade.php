@extends('layout')

@section('contenido')

  <form method="POST" action="{{ route('maquinarias.store') }}">
    {!! csrf_field() !!}
    <div class="container">
  <div class="row">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h1>Maquinarias</h1>
      </div>
     
      <div class="panel-body">
        <div class="col-md-3 col-md-offset-1">
          <label for="func">Maquinaria</label>
          <div class="input-group">
            <input type="text" name="ma_nombre" class="form-control" value="" placeholder="Nombre Maquinaria">
          </div>
        </div>

        <div class="col-md-3">
          <label for="func">Marca</label>
          <div class="input-group">
            <input type="text" name="ma_marca" class="form-control" value="" placeholder="Marca de la maquinaria">
          </div>
        </div>

        <div class="col-md-3">
          <label for="func">Modelo</label>
          <div class="input-group">
            <input type="text" name="ma_modelo" class="form-control" value="" placeholder="Modelo de la maquinaria">
          </div>
        </div>

        <div class="row">
          <br><br><br><br>
        </div>
        
        <div class="col-md-3 col-md-offset-1">
          <label for="func">Fecha de Adquisición</label>
          <div class="input-group">
            <input type="date" name="ma_fecha_adquisicion" class="form-control" value="" placeholder="Fecha de la adquisición de la maquinaria">
          </div>
        </div>        

        <div class="col-md-3">
          <label for="func">Distancia realizada</label>
          <div class="input-group">
            <input type="text" name="ma_distancia" class="form-control" value="" placeholder="Kilometraje">
          </div>
        </div>

        <div class="col-md-3">
          <label for="func">Fecha de Mantenimiento</label>
          <div class="input-group">
            <input type="date" name="ma_fecha_mantenimiento" class="form-control" value="" placeholder="Fecha de mantenimiento de la maquinaria">
          </div>
        </div>
        <div class="row">
          <br><br><br><br>
        </div>

        <div class="row">
          <div class="col-md-5 col-md-offset-4">
            <input class="btn button-primary" value="Guardar" type="submit">
            <a class="btn button-primary" href="{{ route('maquinarias.create') }}">Cancelar</a>
            <button type="button" class="btn button-primary" id="volver" name="button">Volver</button>
          </div>
        </div>
       <br>
  </form>

    <table class="table table-responsive">
    <thead>
      <tr>
          <th>Nombre Maquinaria</th>
          <th>Marca</th>
          <th>Modelo</th>
          <th>Fecha Adquisición</th>
          <th>Distancia realizada</th>
          <th>Fecha de Mantenimiento</th>

          <th>Acción</th>
      </tr>
    </thead>
          
    <tbody>
      @foreach($maquinarias as $maquinaria)
        @if($maquinaria->ma_estado)
        
        <tr>
          <td>{{ $maquinaria->ma_nombre }}</td>
          <td>{{ $maquinaria->ma_marca }}</td>
          <td>{{ $maquinaria->ma_modelo }}</td>
          <td>{{ $maquinaria->ma_fecha_adquisicion }}</td>
          <td>{{ $maquinaria->ma_distancia }}</td>
          <td>{{ $maquinaria->ma_fecha_mantenimiento }}</td>
          <td>
            <a class="btn btn-link" href="{{ route('maquinarias.edit', $maquinaria->id) }}">Editar</a>

            <form style="display: inline" method="POST" action="{{ route('maquinarias.destroy', $maquinaria->id) }}">
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