@extends('layout')

@section('contenido')

{{-- m_descripcion
m_unidad_medida
m_costo
m_min_stock
m_cantidad_actual
m_estado--}}

	<form method="POST" action="{{ route('materiales.store') }}">
    {!! csrf_field() !!}
    <div class="container">
      <div class="row">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h1>Materiales</h1>
          </div>
          <div class="panel-body">
              <div class="col-md-3">
                    <label for="">Material</label>
                    <div class="form-group">
                        <input type="text" size="19"  class="form-control" value="" name="m_descripcion" placeholder="Descripción del Material">
                    </div>
                  </div>

              <div class="col-md-2">
                <label for="">Unidad de medida</label>
                <div class="form-group">
                  <input type="text" size="19"  class="form-control" name="m_unidad_medida" value="" placeholder="Unidad de medida">
                </div>
              </div>

              <div class="col-md-2">
                <label for="" >Costo</label>
                <div class="form-group">
                  <input type="text" size="19" class="form-control" name="m_costo" value="" placeholder="Costo Unitario">
                </div>
              </div>
              {{-- <div class="col-md-3">
                <label for="" >Cantidad Mínima Requerida</label>
                <div class="form-group">
                  <input type="text" size="19" class="form-control" name="m_min_stock" value="" placeholder="Cantidad Mínima">
                </div>
              </div>

              <div class="col-md-2">
                <label for="">Cantidad Actual</label>
                <div class="form-group">
                  <input type="text" size="19" class="form-control" name="m_cantidad_actual" value="" placeholder="Cantidad Actual">
                </div>
              </div> --}}

              <div class="row">
                      <br>
              </div>

              <div class="row">
                <div class="col-md-4 col-md-offset-4" style="margin-top: 10px">
                  <button type="submit" class="btn button-primary">Guardar</button>
                  <a class="btn button-primary" href="{{ route('materiales.create') }}">Cancelar</a>
                  <a class="btn button-primary" href="{{ route('home') }}">Volver</a>
                </div>
              </div>
              <br>
</form>

    <table class="table table-responsive">
    <thead>
      <tr>
        <th>Material</th>
        <th>Costo</th>
        <th>Cantidad Mínima Requerida</th>
        <th>Cantidad Actual</th>
        <th>Unidad de medida</th>
        <th>Acción</th>
      </tr>
    </thead>

      <tbody>
        @foreach($materiales as $material)
          @if($material->m_estado == 1)
            <tr>
              <td>{{ $material->m_descripcion }}</td>
              <td>{{ $material->m_costo }}</td>
              <td>{{ $material->m_min_stock }}</td>
              <td>{{ $material->m_cantidad_actual }}</td>
              <td>{{ $material->m_unidad_medida }}</td>
              <td>
                <a class="btn btn-link" href="{{ route('materiales.edit', $material->id) }}">Editar</a>

                <form style="display: inline" method="POST" action="{{ route('materiales.destroy', $material->id) }}">
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