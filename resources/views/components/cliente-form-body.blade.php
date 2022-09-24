@csrf
<div class="row">
     <div class="cold-sm-12">
        <label for="InputNombre" class="form-label">Nombre del cliente</label>
        <input type="text" name="nombre" id="InputNombre" class="form-control" value="{{ old('nombre', $cliente->nombre) }}">
     </div>
     <div class="cold-sm-4">
        <label for="InputApellido" class="form-label">Apellido del cliente</label>
        <input type="text" name="apellido" id="InputApellido" class="form-control" value="{{ old('apellido', $cliente->apellido)  }}">
     </div>
     <div class="cold-sm-4">
        <label for="InputTelefono" class="form-label">Telefono del cliente</label>
        <input type="text" name="telefono" id="InputTelefono" class="form-control" value="{{ old('telefono', $cliente->telefono )}}">
     </div>
     <div class="cold-sm-12 text-end">
        <button type="submit" class="btn btn-primary">Guardar</button>
     </div>
</div>
