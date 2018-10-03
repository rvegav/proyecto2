@extends('layout')

@section('contenido')

	<form method="POST" action="{{route('rubros.store')}}">
		{!! csrf_field() !!}
		<div class="container">
			<div class="row">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h1>Rubros</h1>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-2 col-md-offset-3">
								<label for="">Rubro</label>
								<input type="text" class="form-control" name="nombre_rubro" value="" placeholder="Nombre del rubro">
							</div>
							<div class="col-md-3">
								<label for="">Detalle</label>
								<input type="text" class="form-control" name="detalle_rubro" value="" placeholder="Detalle del rubro">
							</div>
						</div>
					</tbody>
				</table>
			</div>
			
			<div class="row">
                <div class="col-md-4 col-md-offset-4" style="margin-top: 10px">
                  <button type="submit" class="btn button-primary">Guardar</button>
                  <a class="btn button-primary" href="{{ route('rubros.create') }}">Cancelar</a>
                  <button type="button" class="btn button-primary" id="volver" name="button">Volver</button>
                </div>
            </div>
            <br>
</form>
			<table class="table table-responsive">
				<thead>
					<tr>
						<th>Rubro</th>
						<th>Detalle</th>
						<th>Acción</th>
					</tr>
				</thead>
				<tbody>
					@foreach($rubros as $rubro)

					<tr>
						<td>{{ $rubro->nombre_rubro }}</td>
						<td>{{ $rubro->detalle_rubro }}</td>
						<td>
							<a  class="btn btn-link" href="{{ route('rubros.edit', $rubro->id) }}" >Editar</a>	
							<form style="display: inline" method="POST" action="{{ route('rubros.destroy', $rubro->id) }}">
					          {!! csrf_field() !!}
					          {!! method_field('DELETE') !!}
					          <button class="btn button-primary" type="submit">Eliminar</button>
					        </form>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>      
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