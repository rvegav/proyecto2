@extends('layout')

@section('contenido')
<body>
	<form method="POST" action="{{route('rubros.store')}}">
		{!! csrf_field() !!}
		<div class="container">
			<div class="row">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h1>Carga de Rubros</h1>
					</div>
					<div class="panel-body">
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
                <div class="col-md-4 col-md-offset-4" style="margin-top: 10px">
                  <button type="submit" class="btn button-primary">Guardar</button>
                  <a class="btn button-primary" href="{{ route('rubros.create') }}">Cancelar</a>
                  <a class="btn button-primary" href="{{ route('home') }}">Volver</a>
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
			<div class="panel-footer">Copyright	</div>
		</div>
	</div>
</body>
</html>
@stop