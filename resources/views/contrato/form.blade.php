<div class="kt-portlet__body">
	<div class="form-group form-group-last">

		@error('fecha_alta')
            <div class="alert alert-danger" role="alert">
                <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
                <div class="alert-text">Debe ingresar una fecha de alta</div>
            </div>
		@enderror

		@error('idServicio')
            <div class="alert alert-danger" role="alert">
                <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
                <div class="alert-text">Debe seleccionar un servicio</div>
            </div>
		@enderror
        @error('idCliente')
            <div class="alert alert-danger" role="alert">
                <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
                <div class="alert-text">Debe seleccionar un cliente</div>
            </div>
		@enderror
        @error('fecha_vencimiento')
            <div class="alert alert-danger" role="alert">
                <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
                <div class="alert-text">Debe ingresar una fecha de vencimiento</div>
            </div>
		@enderror
        @error('dominio')
            <div class="alert alert-danger" role="alert">
                <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
                <div class="alert-text">Debe ingresar un dominio</div>
            </div>
		@enderror
	</div>



	<div class="form-row">
        <div class="row">
		<div class="col-6">
			<div class="form-group">
				<label for="idCliente">Cliente:{{$clientes->count()}}</label>
				<select class="form-control mb-2" id="idCliente" name="idCliente" required>
                    @foreach($clientes as $cliente)
                        <option value="{{ $cliente->id }}">{{$cliente->id}} - {{ $cliente->apellido }}, {{ $cliente->nombre }}</option>
                    @endforeach
                </select>
			</div>
        </div>
        <div class="col-6">    
            <div class="form-group">
				<label for="idServicio">Servicio: {{$servicios->count()}}</label>
				<select class="form-control mb-2" id="idServicio" name="idServicio"  onchange="muestraPrecioServicio();" required>
                    @foreach($servicios as $servicio)
                        <option value="{{ $servicio->precio }}">{{$servicio->id}} - {{ $servicio->nombre }}</option>
                    @endforeach
                </select>
			</div>
        </div>
    </div>
        <div class="row">
        <div class="col-2">
		    <div class="form-group">
				<label for="cuit">Fecha alta:</label>
				<input type="date" 
                    name="fecha_alta" 
                    id="fecha_alta" 
                    placeholder="Fecha alta" 
                    class="form-control mb-2" 
                    value="{{ isset($contrato->fecha_alta)?$contrato->fecha_alta:old('fecha_alta') }}" />
			</div>
        </div>
        <div class="col-2">
		    <div class="form-group">
				<label for="cuit">Fecha Vto:</label>
				<input type="date" 
                    name="fecha_vencimiento" 
                    id="fecha_vencimiento" 
                    placeholder="Fecha vencimiento.. se hace manual por ahora." 
                    class="form-control mb-2" 
                    value="{{ isset($contrato->fecha_vencimiento)?$contrato->fecha_vencimiento:old('fecha_vencimiento') }}" />
			</div>
        </div>
        
        <div class="col-4">
		    <div class="form-group">
				<label for="cuit">Dominio:</label>
				<input type="text" 
                    name="dominio" 
                    id="dominio" 
                    placeholder="Dominio" 
                    class="form-control mb-2" 
                    value="{{ isset($contrato->dominio)?$contrato->dominio:old('dominio') }}" />
			</div>
        </div>
        <div class="col-2">
		    <div class="form-group">
				<label for="cuit">Precio Actual:</label>
				<input type="text" 
                    name="precio_actual" 
                    id="precio_actual" 
                    placeholder="El precio es según la cara" 
                    class="form-control mb-2" 
                    value="0"/>
			</div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-12">
            <div class="form-group">Descripción:</label>
                <textarea class="form-control mb-2" id="descripcion" rows="3">{{ isset($contrato->descripcion)?$contrato->descripcion:old('descripcion') }}</textarea>
    		</div>
		</div>
    </div>

    <script>
        function muestraPrecioServicio()
        {
            document.getElementById("precio_sugerido").value = document.getElementById("idServicio").value;
          

        }
    </script>
		




	</div>
	<div class="kt-portlet__foot">
		<div class="kt-form__actions">
			<button class="btn btn-success" type="submit">Guardar</button>
			<a class="btn btn-secondary" href="/contrato" type="submit">Cancelar</a>
		</div>
	</div>