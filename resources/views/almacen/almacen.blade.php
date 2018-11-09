@extends('layout')

@section('contenido')
<div class="container">
	<div class="row">
		<div class="panel panel-default">
			<div class="panel-body">
				<h2>ALMACEN DE OBRA</h2>
				<div class="row">
					<div class="col-md-3">
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#pedido">Realizar Pedido</button>
					</div>
				</div>
				<div class="row">
					<table class="table table-responsive">
						<thead>
							<tr>
								<th>Cod. Material</th>
								<th>Descripcion</th>
								<th>Tipo</th>
								<th>Cantidad Minima</th>
								<th>Cantidad</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Cemento Porland</td>
								<td>--</td>
								<td>30</td>
								<td>120</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<div id="pedido" class="modal fade" role="dialog">
	<div class="modal-dialog modal-lg">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Orden de Compra</h4>
			</div>
			<div class="modal-body">
				<div class="panel panel-default">

					<div class="panel-body">
						<div class="col-md-12">
							<div class="row">
								<label for="mate">Descripcion</label>
								<input type="text" id="mate" name="mate" placeholder="Material Requerido">
								<label for="cant">Cantidad</label>
								<input type="text" id="cant" name="cant" placeholder="Cantidad Requerida">								
							</div>
							<div class="row">
								<button type="button" id="eliminar" name"eliminar" class="btn btn-primary"><i class="fa fa-trash"></i></button>
							</div>
							<div class="row">
								<div class="table-responsive" >
									<table class="table" id="materiales" >
										<thead>
											<tr>
												<th>Material</th>
												<th>Cantidad</th>
												{{-- <th>Accion</th> --}}
											</tr>
										</thead>
										<tbody>
										</tbody>
										<tfoot>
											<tr>

												<th id="cant_total">Total Articulos: 0 </th>

											</tr>
										</tfoot>
									</table>
								</div>

								
							</div>
						</div>

					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default">Enviar Aprobacion</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>

	</div>
</div>
<!-- Modal -->
@push('scripts')
	<script type="text/javascript">
		var counter = 1;
		var materiales = [];
		var cantMateriales =0;
		var t = $('#materiales').DataTable( {
			"paging":   false,
			"ordering": false,
			"info":     false,
			"searching": false,
			"language":{
				"sEmptyTable": "No se agregó ningun Material"
			}
		} );
		// $(document).on('click', '#eliminar', function(event){
		// 	event.preventDefault();
		// 	// $(this).closest('tr').remove;
		// 	t.row(this).remove().draw(false);

		// })
		$("#eliminar").click(function(){
					
			t.row('.selected').remove().draw(false);
			$("#cant_total").html('<th>Total Articulos: '++'</th>');

		});
		$(document).ready(function() {
			$('#materiales tbody').on('click', 'tr', function(){
				if ($(this).hasClass('selected')){
					$(this).removeClass('selected');
				}
				else{
					t.$('tr.selected').removeClass('selected');
					$(this).addClass('selected');

				}
			});
			

			document.getElementById("cant").onkeypress = function() {myFunction(event, t, counter )};
		} );
		function myFunction(e, t, counter) {
			var cant = $('#cant').val();
			var mate = $('#mate').val();
			var id_mate = $('#id_mate').val();
			var button = '<button type="button" id="eliminar" name"eliminar" class="btn btn-primary"><i class="fa fa-trash"></i></button>';
			if (e.which == 13) {
				materiales.push(mate|);
				t.row.add( [
					mate,
					cant
					] ).draw( false );
				$("#cant_total").html('<th>Total Articulos: '+materiales.length+'</th>');
				$('#mate').val("");
				$('#cant').val("");
				$('#id_mate').val("");
				$('#mate').focus();
			}

		};

</script>
@endpush
@endsection


