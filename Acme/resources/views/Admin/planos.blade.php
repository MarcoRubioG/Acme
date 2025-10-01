@extends('Admin.layouts.main')

@section('content')
   <div class="d-flex justify-content-between align-items-center mb-3">
       <h1>Planos</h1>
       <button class="btn btn-success" data-toggle="modal" data-target="#modalAgregar">
           <i class="fas fa-plus"></i> Agregar Plano
       </button>
   </div>
   
   <div class="p-4">
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Proyecto ID</th>
      <th scope="col">Nombre Plano</th>
      <th scope="col">Tipo</th>
      <th scope="col">Escala</th>
      <th scope="col">Versión</th>
      <th scope="col">Estado</th>
      <th scope="col">Num. Hojas</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach($planos as $item)
      <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->proyecto_id}}</td>
        <td>{{$item->Nombre_Plano}}</td>
        <td>{{$item->Tipo_Plano}}</td>
        <td>{{$item->Escala}}</td>
        <td>{{$item->Version}}</td>
        <td>{{$item->Estado_Plano}}</td>
        <td>{{$item->Num_Hojas}}</td>
        <td>
          <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#modalPlano{{$item->id}}">
            Ver
          </button>
          
          <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalEliminar{{$item->id}}">
            X
          </button>
        </td>
      </tr>

      <!-- Modal Ver Detalles -->
      <div class="modal fade" id="modalPlano{{$item->id}}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Detalles del Plano #{{$item->id}}</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p><strong>ID:</strong> {{$item->id}}</p>
              <p><strong>Proyecto ID:</strong> {{$item->proyecto_id}}</p>
              <p><strong>Nombre:</strong> {{$item->Nombre_Plano}}</p>
              <p><strong>Tipo:</strong> {{$item->Tipo_Plano}}</p>
              <p><strong>Escala:</strong> {{$item->Escala}}</p>
              <p><strong>Archivo Path:</strong> {{$item->Archivo_Path}}</p>
              <p><strong>Formato:</strong> {{$item->Formato_Archivo}}</p>
              <p><strong>Número de Hojas:</strong> {{$item->Num_Hojas}}</p>
              <p><strong>Fecha Actualización Anterior:</strong> {{$item->Fecha_Actualizacion_Anterior}}</p>
              <p><strong>Fecha Actualización Actual:</strong> {{$item->Fecha_Actualizacion_Actual}}</p>
              <p><strong>Versión:</strong> {{$item->Version}}</p>
              <p><strong>Estado:</strong> {{$item->Estado_Plano}}</p>
              <p><strong>Observaciones:</strong> {{$item->Observaciones}}</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal Confirmar Eliminación -->
      <div class="modal fade" id="modalEliminar{{$item->id}}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header bg-danger text-white">
              <h5 class="modal-title">Confirmar Eliminación</h5>
              <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>¿Estás seguro de que deseas eliminar el plano <strong>"{{$item->Nombre_Plano}}"</strong>?</p>
              <p class="text-muted">Esta acción no se puede deshacer.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              <form action="/dashboard/planos/{{$item->id}}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
              </form>
            </div>
          </div>
        </div>
      </div>

    @endforeach
  </tbody>
</table>
   </div>

  <!-- Modal Agregar Plano -->
<div class="modal fade" id="modalAgregar" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-success text-white">
        <h5 class="modal-title">Agregar Nuevo Plano</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/dashboard/planos" method="POST">
        @csrf
        <div class="modal-body">
          
          <div class="form-group">
            <label>Nombre del Plano</label>
            <input type="text" name="Nombre_Plano" class="form-control" maxlength="100" required>
          </div>
          
          <div class="form-group">
            <label>Tipo de Plano</label>
            <select name="Tipo_Plano" class="form-control">
              <option value="">Seleccionar...</option>
              <option value="Planta Arquitectónica">Planta Arquitectónica</option>
              <option value="Fachada">Fachada</option>
              <option value="Corte">Corte</option>
              <option value="Detalle">Detalle</option>
              <option value="Estructural">Estructural</option>
              <option value="Instalaciones">Instalaciones</option>
            </select>
          </div>
          
          <div class="form-group">
            <label>Escala</label>
            <select name="Escala" class="form-control">
              <option value="">Seleccionar...</option>
              <option value="1:100">1:100</option>
              <option value="1:50">1:50</option>
              <option value="1:75">1:75</option>
              <option value="1:25">1:25</option>
              <option value="1:20">1:20</option>
              <option value="1:10">1:10</option>
              <option value="1:5">1:5</option>
            </select>
          </div>
          
          <div class="form-group">
            <label>Archivo Path</label>
            <input type="text" name="Archivo_Path" class="form-control" maxlength="300">
          </div>
          
          <div class="form-group">
            <label>Formato de Archivo</label>
            <select name="Formato_Archivo" class="form-control">
              <option value="">Seleccionar...</option>
              <option value="PDF">PDF</option>
              <option value="DWG">DWG</option>
              <option value="DXF">DXF</option>
              <option value="PNG">PNG</option>
              <option value="JPG">JPG</option>
            </select>
          </div>
          
          <div class="form-group">
            <label>Número de Hojas</label>
            <input type="number" name="Num_Hojas" class="form-control" min="1">
          </div>
          
          <div class="form-group">
            <label>Fecha Actualización Anterior</label>
            <input type="date" name="Fecha_Actualizacion_Anterior" class="form-control">
          </div>
          
          <div class="form-group">
            <label>Fecha Actualización Actual</label>
            <input type="date" name="Fecha_Actualizacion_Actual" class="form-control">
          </div>
          
          <div class="form-group">
            <label>Versión</label>
            <input type="text" name="Version" class="form-control" maxlength="50" placeholder="v1.0">
          </div>
          
          <div class="form-group">
            <label>Estado del Plano</label>
            <select name="Estado_Plano" class="form-control">
              <option value="">Seleccionar...</option>
              <option value="Aprobado">Aprobado</option>
              <option value="En Revisión">En Revisión</option>
              <option value="Pendiente">Pendiente</option>
              <option value="Rechazado">Rechazado</option>
            </select>
          </div>
          
          <div class="form-group">
            <label>Observaciones</label>
            <textarea name="Observaciones" class="form-control" rows="3"></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-success">Guardar Plano</button>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection


@section('scripts')
   <script>
     console.log("Planos cargados correctamente");
   </script>
@endsection