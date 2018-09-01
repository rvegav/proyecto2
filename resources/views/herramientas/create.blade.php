@extends('layout')

@section('contenido')
<div class="container">
  <div class="row">
    <div class="panel panel-default">
      <div class="panel-heading">

      </div>
      <div class="panel-body">
        <h2>Herramientas</h2>
        <div class="row">
          <div class="col-md-3 col-md-offset-1">
            <label for="Descripcion">Nombre de la herramienta</label>
            <input type="text" class="form-control" name="nombre" value="">
          </div>
          <div class="col-md-3">
            <label for="Coste">Fecha Adquisicion</label>
            <input type="date" class="form-control" name="fecha">
          </div>
          <div class="col-md-4 ">
            <label for="Coste">Marca</label>
            <input type="text"class="form-control" name="Coste" value="">
          </div>
        </div>
        <div class="row">
        </div>
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <label for="minimo">Cantidad Actual</label>
            <input type="text"class="form-control" name="minimo" value="">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <div class="form-group">
              <label for="sel1">Seleccione Estado:</label>
              <select class="form-control" id="sel1">
                <option value="D">Disponible</option>
                <option value="U">En uso</option>
                <option value="O">Obsoleto</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 col-md-offset-4">
              <label for="minimo">Ubicacion Actual</label>
              <input type="text"class="form-control" name="minimo" value="">
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-3 col-md-offset-4">
              <button type="button" class="btn btn-primary" name="button">Aceptar</button>
              <button type="button" class="btn btn-primary"  name="button">Cancelar</button>
            </div>
            <div class="col-md-3">
            </div>
          </div>
          
          <div class="panel-footer">

          </div>
        </div>
        
      </div>
    </div>
  </div>
</div>

@stop