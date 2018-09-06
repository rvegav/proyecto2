@extends('layout')

@section('contenido')
<body>
	<form method="POST" action="{{route('empleados.store')}}">
		{!! csrf_field() !!}
		<div class="container">
			<div class="row">
				<div class="panel panel-default">
					<div class="panel-heading">
					</div>
					<div class="panel-body">
						<h2>Carga de Empleados</h2>
						<div class="row">
							<div class="col-md-3">
								<label for="">Primer Nombre</label>
								<input type="text" class="form-control" name="primerNombre" value="">
							</div>
							<div class="col-md-3">
								<label for="">Segundo Nombre</label>
								<input type="text" class="form-control" name="segundoNombre" value="">
							</div>
							<div class="col-md-3">
								<label for="">Primer Apellido</label>
								<input type="text"class="form-control" name="primerApellido" value="" placeholder="Primer Apellido">
							</div>
							<div class="col-md-3">
								<label for="">Segundo Apellido</label>
								<input type="text"class="form-control" name="segundoApellido" value="" placeholder="Segundo Apellido">
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="sel1">Rubro de los Empleados:</label>
									<select class="form-control" id="rubro" name="rubro">
										<option>Pintor</option>
										<option>Electricista</option>
										<option>Plomero</option>
										<option>Carpintero</option>
										<option>Albañil</option>
									</select>
								</div>
							</div>
						</div>
					</tbody>
				</table>
			</div>
			
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<button type="submit" class="btn btn-primary">Guardar</button>
					<button type="button" class="btn btn-primary">Buscar</button>
					<button type="button" class="btn btn-primary">Cancelar</button>
					<button type="button" class="btn btn-primary" id="volver">Volver</button>
					<!--<input type="submit" name="enviarEmpleado" value="Enviar">-->

				</div>
			</div>
			<table class="table table-responsive">
				<thead>
					<tr>
						<th>Primer Nombre</th>
						<th>Segungo Nombre</th>
						<th>Primer Apellido</th>
						<th>Primer Apellido</th>
						<th>Rubro</th>
						<th>Acción</th>
					</tr>
				</thead>
				<tbody>
					@foreach($empleados as $empleado)

					<tr>
						<td>{{ $empleado->primerNombre }}</td>
						<td>{{ $empleado->segundoNombre }}</td>
						<td>{{ $empleado->primerApellido }}</td>
						<td>{{ $empleado->segundoApellido }}</td>
						<td>{{ $empleado->rubro }}</td>
						<td>
							<a href="{{ route('empleados.edit', $empleado->id) }}">Editar</a>
							<form style="display: inline" method="POST" action="{{ route('empleados.destroy', $empleado->id) }}">
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
</form>
</body>
</html>

@stop
