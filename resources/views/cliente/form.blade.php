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
                    value="{{ isset($cliente->nombre)?$cliente->nombre:old('nombre') }}" />
			</div>
        </div>
        <div class="col-6">    
            <div class="form-group">
				<label for="nombre">Apellido:</label>
				<input type="text" 
                    name="apellido" 
                    id="apellido" 
                    placeholder="Apellido" 
                    class="form-control mb-2" 
                    value="{{ isset($cliente->apellido)?$cliente->apellido:old('apellido') }}" />
			</div>
        </div>
    </div>
        <div class="row">
        <div class="col-6">
		    <div class="form-group">
				<label for="cuit">C.U.I.T.:</label>
				<input type="text" 
                    name="cuit" 
                    id="cuit" 
                    placeholder="C.U.I.T." 
                    class="form-control mb-2" 
                    value="{{ isset($cliente->cuit)?$cliente->cuit:old('cuit') }}" />
			</div>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <div class="form-group">
				<label for="email">Email:</label>
				<input type="text" 
                    name="email" 
                    id="email" 
                    placeholder="email" 
                    class="form-control mb-2" 
                    value="{{ isset($cliente->email)?$cliente->email:old('email') }}" />
			</div>
        </div>
        <div class="col-4">
            <div class="form-group">
				<label for="email">Email 2:</label>
				<input type="text" 
                    name="email_2" 
                    id="email_2" 
                    placeholder="email_2" 
                    class="form-control mb-2" 
                    value="{{ isset($cliente->email_2)?$cliente->email_2:old('email_2') }}" />
			</div>
        </div>    
        <div class="col-4">
            <div class="form-group">
				<label for="email">Email 3:</label>
				<input type="text" 
                    name="email_3" 
                    id="email_3" 
                    placeholder="Email 3" 
                    class="form-control mb-2" 
                    value="{{ isset($cliente->email_3)?$cliente->email_3:old('email_3') }}" />
			</div>
        </div>
    </div>    
    
    <div class="row">
        <div class="col-4">
            <div class="form-group">Tel 1:</label>
				<input type="text" 
                    name="tel_1" 
                    id="tel_1" 
                    placeholder="Teléfono 1" 
                    class="form-control mb-2" 
                    value="{{ isset($cliente->tel_1)?$cliente->tel_1:old('tel_1') }}" />
			</div>
        </div>
        <div class="col-4">
            <div class="form-group">Tel 2:</label>
				<input type="text" 
                    name="tel_2" 
                    id="tel_2" 
                    placeholder="Teléfono 2" 
                    class="form-control mb-2" 
                    value="{{ isset($cliente->tel_2)?$cliente->tel_2:old('tel_2') }}" />
			</div>
        </div>
        <div class="col-4">
            <div class="form-group">Tel 3:</label>
				<input type="text" 
                    name="tel_3" 
                    id="tel_3" 
                    placeholder="Teléfono 3" 
                    class="form-control mb-2" 
                    value="{{ isset($cliente->tel_3)?$cliente->tel_3:old('tel_3') }}" />
			</div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            
            

            
            
            
            
            <div class="form-group">Comentarios:</label>
                <textarea class="form-control mb-2" id="comentarios" rows="3">{{ isset($cliente->comentarios)?$cliente->comentarios:old('comentarios') }}</textarea>
				
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