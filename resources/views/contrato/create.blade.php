@extends('plantilla-bootstrap')
@section('seccion')

@if ( session('mensaje') )
<div class="alert alert-success">{{ session('mensaje') }}</div>
@endif


@if ($errors->has('imagen'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
	Debe colocar una imagen principal
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
</div>
@endif

<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
	<div class="row">
		<div class="col-md-12">
			<!--begin::Portlet-->
			<div class="kt-portlet">
				<div class="kt-portlet__head">
					<div class="kt-portlet__head-label">
						<h3 class="kt-portlet__head-title">Nuevo contrato</h3>
					</div>
				</div>
				<!--begin::Form-->


				<form class="kt-form" method="POST" action="{{ url('/contrato') }}" enctype="multipart/form-data" id="formAltaContrato">
					@csrf
					@include('contrato.form', ['Modo'=>'Crear'])

				</form>


			</div>
		</div>

	</div>
</div>



<script>
	//llamo a la propiedad chage del objeto $('#foto_1') que es lo mismo que obtenerlo por getElementById

/*	document.getElementById("imagen").onchange = function(e) {
		addImage(e);
	};
	document.getElementById("foto_2").onchange = function(e) {
		addImage(e);
	};
	document.getElementById("foto_3").onchange = function(e) {
		addImage(e);
	};
	document.getElementById("foto_4").onchange = function(e) {
		addImage(e);
	};
	document.getElementById("foto_5").onchange = function(e) {
		addImage(e);
	};
	document.getElementById("foto_6").onchange = function(e) {
		addImage(e);
	};

	document.getElementById("mostrarAltaDeCategoria").onclick = function(e) {
		document.getElementById("formAltaAviso").style.display = "block";
	};

	document.getElementById("botonCerrarFormAltaCategoria").onclick = function(e) {
		document.getElementById("formAltaAviso").style.display = "none";
	};


	var foto_actual = '#imagen_img';

	function addImage(e) {
		var file = e.target.files[0],
			imageType = /image./;

		if (!file.type.match(imageType)) return;

		foto_actual = '#' + e.srcElement.id + '_img';
		console.log(foto_actual);

		var reader = new FileReader();
		reader.onload = fileOnload;
		reader.readAsDataURL(file);
	}

	function fileOnload(e) {
		var result = e.target.result;
		$(foto_actual).attr("src", result);
	}*/
</script>
@endsection