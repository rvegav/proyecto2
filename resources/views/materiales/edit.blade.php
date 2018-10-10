@extends('layout')

@section('contenido')


<form method="POST" action="{{ route('materiales.update', $material->id) }}">
  {!! csrf_field() !!}
  {!! method_field('PUT') !!}

  <div class="container">
    <div class="row">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h1>Administración de Materiales</h1>
        </div>

        <div class="panel-body">
          <div class="panel-body">
              <div class="col-md-3">
                    <label for="">Descipción del Material</label>
                    <div class="form-group">
                        <input type="text" size="19"  class="form-control" name="m_descripcion" value="{{ $material->m_descripcion}}" placeholder="Descipción del Material">
                    </div>
                  </div>

              <div class="col-md-2">
                <label for="">Unidad de medida</label>
                <div class="form-group">
                  <input type="text" size="19"  class="form-control" name="m_unidad_medida" value="{{ $material->m_unidad_medida}}" placeholder="Unidad de medida">
                </div>
              </div>

              <div class="col-md-2">
                <label for="" >Costo</label>
                <div class="form-group">
                  <input type="text" size="19" class="form-control" name="m_costo" value="{{ $material->m_costo}}" placeholder="Costo">
                </div>
              </div>
              <{{-- div class="col-md-3">
                <label for="" >Cantidad Mínima Requerida</label>
                <div class="form-group">
                  <input type="text" size="19" class="form-control" name="m_min_stock" value="{{ $material->m_min_stock}}" placeholder="Cantidad Minima">
                </div>
              </div>

              <div class="col-md-2">
                <label for="">Cantidad Actual</label>
                <div class="form-group">
                  <input type="text" size="19" class="form-control" name="m_cantidad_actual" value="{{ $material->m_cantidad_actual}}" placeholder="Cantidad Actual">
                </div>
              </div> --}}

              <div class="row">
                      <br>
              </div>

              <div class="row">
                <div class="col-md-4 col-md-offset-4" style="margin-top: 10px">
                  <button type="submit" class="btn button-primary">Guardar</button>
                  <a class="btn button-primary" href="{{ route('materiales.edit', $material->id) }}">Cancelar</a>
                  <a class="btn button-primary" href="{{ route('materiales.create') }}">Volver</a>
                </div>
              </div>
          <br>

        </form>
      </div>
    </div>
  </div>
</div>

@stop