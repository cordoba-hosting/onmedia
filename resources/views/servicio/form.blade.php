<div class="kt-portlet__body">
	<div class="form-group form-group-last">

		@error('nombre')
		<div class="alert alert-danger" role="alert">
			<div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
			<div class="alert-text">El nombre es obligatorio</div>
		</div>
		@enderror

		@error('descripcion')
		<div class="alert alert-danger" role="alert">
			<div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
			<div class="alert-text">La descripción es obligatoria</div>
		</div>
		@enderror
	</div>



	<div class="form-row">
        <div class="row">
		<div class="col-6">
			<div class="form-group">
				<label for="nombre">Nombre:</label>
				<input type="text" 
                    name="nombre" 
                    id="nombre" 
                    placeholder="Nombre" 
                    class="form-control mb-2" 
                    value="{{ isset($servicio->nombre)?$servicio->nombre:old('nombre') }}" />
			</div>
        </div>
        <div class="col-3">
			<div class="form-group">
				<label for="nombre">Periodo de facturación:</label>
				<input type="text" 
                    name="periodo_facturacion" 
                    id="periodo_facturacion" 
                    placeholder="En días" 
                    class="form-control mb-2" 
                    value="{{ isset($servicio->periodo_facturacion)?$servicio->periodo_facturacion:old('periodo_facturacion') }}" />
			</div>
        </div>
		<div class="col-3">
			<div class="form-group">
				<label for="nombre">Precio:</label>
				<input type="text" 
                    name="precio" 
                    id="precio" 
                    placeholder="Precio en pesos" 
                    class="form-control mb-2" 
                    value="{{ isset($servicio->precio)?$servicio->precio:old('precio') }}" />
			</div>
        </div>
    </div>
        
    <div class="row">
        <div class="col-12">    
            <div class="form-group">
				<label for="comentarios">Descripción:</label>
                <textarea class="form-control mb-2" id="descripcion" name="descripcion" rows="8">{{ isset($servicio->descripcion)?$servicio->descripcion:old('descripcion') }}</textarea>
			</div>
        </div>
    </div>    
    
   

		




	</div>
	<div class="kt-portlet__foot">
		<div class="kt-form__actions">
			<button class="btn btn-success" type="submit">Guardar</button>
			<a class="btn btn-secondary" href="/cliente" type="submit">Cancelar</a>
		</div>
	</div>