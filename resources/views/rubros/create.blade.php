@extends('layout')

@section('contenido')
<body>
	<form method="POST" action="{{route('rubros.store')}}">
		{!! csrf_field() !!}
		<div class="container">
			<div class="row">
				<div class="panel panel-default">
					<div class="panel-heading">
					</div>
					<div class="panel-body">
						<h2>Carga de Rubros</h2>
						<div class="row">
							<div class="col-md-3">
								<label for="">Nombre del Rubro</label>
								<input type="text" class="form-control" name="nombre_rubro" value="">
							</div>
							<div class="col-md-3">
								<label for="">Detalle de Rubro</label>
								<input type="text" class="form-control" name="detalle_rubro" value="">
							</div>
						</div>
					</tbody>
				</table>
			</div>
			
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					
					<input type="submit" name="Enviar0">
					<!--<button type="button" class="btn btn-primary">Buscar</button>-->
					<!--<button type="button" class="btn btn-primary">Cancelar</button>-->
					<a href = "{{route('rubros.create')}}" class="btn btn-primary">Cancelar</a>
					<button type="button" class="btn btn-primary" id="volver">Volver</button>
				</div>
			</div>
</form>
			<table class="table table-responsive">
				<thead>
					<tr>
						<th>Nombre del Rubro</th>
						<th>Detalle del Rubro</th>
						<th>Acción</th>
					</tr>
				</thead>
				<tbody>
					@foreach($rubros as $rubro)

					<tr>
						<td>{{ $rubro->nombre_rubro }}</td>
						<td>{{ $rubro->detalle_rubro }}</td>
						<td>
							<a href="{{ route('rubros.edit', $rubro->id) }}" >Editar</a>
							<form style="display: inline" method="POST" action="{{ route('rubros.destroy', $rubro->id) }}">
					          {!! csrf_field() !!}
					          {!! method_field('DELETE') !!}
					          <button type="submit">Eliminar</button>
					        </form>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>      
			<div class="panel-footer">Copyright	</div>
		</div>
	</div>
</body>
</html>
@stop