@extends('plantilla-bootstrap')
@section('seccion')



<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
	<div class="row">
		<div class="col-md-12">
			<!--begin::Portlet-->
			<div class="kt-portlet">
				<div class="kt-portlet__head">
					<div class="kt-portlet__head-label">
						<h3 class="kt-portlet__head-title">Contratos</h3>
					</div>
				</div>
				<!--begin::Form-->
				<div class="kt-form">
					<div class="kt-portlet__body">
						<div class="form-group form-group-last">

							@if ( session('mensaje') )
							<div class="alert alert-success">{{ session('mensaje') }}</div>
							@endif

							@error('linea_1')
							<div class="alert alert-danger alert-dismissible fade show" role="alert">
								La linea 1 es requerida
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							@enderror

							@if ($errors->has('imagen'))
							<div class="alert alert-danger alert-dismissible fade show" role="alert">
								Debe colocar una imagen principal
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							@endif
						</div>

						<div class="row">
							<table class="table">
								<thead>
									<tr>
										<th scope="col">#</th>
										<th scope="col">Cliente</th>
										<th scope="col">Servicio</th>
										<th scope="col">Email</th>
                                        <th scope="col">Teléfono</th>
										<th scope="col"></th>

									</tr>
								</thead>
								<tbody>
									@foreach($listado as $item)

									<tr>
										<th scope="row">{{$item->id }}</th>
										<th scope="row">{{$item->clientes->apellido}}, {{$item->clientes->nombre}}</th>
										<td>{{$item->email}}</td>
										<td>{{$item->email_2}}</td>
                                        <td>{{$item->tel_1}}</td>
                                        <td><a href="{{url('contrato/'.$item->id.'/edit')}}" class="btn btn-primary btn-sm"><i class="far fa-edit"></i></a></td>
										<td>
                                            <form method="POST" action="{{route('contrato.destroy',$item->id)}}">
                                                {{csrf_field()}}
                                                {{method_field('DELETE')}}
                                                <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('¿Desea borrar el contrato?');">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </td>
										

									</tr>



									<br>
									@endforeach
								</tbody>
							</table>
						</div>
						<div class="row">
							<div class="col-sm-6">{{$listado->links()}}</div>
							<div class="col-sm-6"><a href="{{route('contrato.create')}}" class="btn btn-success btn-sm float-right"> Nuevo Contrato</a></div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection