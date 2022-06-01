@extends('plantilla-bootstrap')
@section('seccion')



<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
	<div class="row">
		<div class="col-md-12">
			<!--begin::Portlet-->
			<div>
				<div>
					<div>
						<h3>Universities from <a href="https://github.com/Hipo/university-domains-list?ref=apilist.fun" target="_blank">Hipo API</a> </h3>
					</div>
				</div>
				
				
					
				<div class="row">
					<form action="{{ url('filter') }}" method="POST" enctype="multipart/form-data" id="formAltaAviso">
						@csrf
						<div class="row">
							<div class="col-6">
								<div class="form-group">
									<label for="name">University's name:</label>
									<input type="text" 
										name="name" 
										id="name" 
										placeholder="Name" 
										class="form-control mb-2" 
										value="{{ isset($name)?$name:old('name') }}" />
								</div>
							</div>
							<div class="col-6">    
								<div class="form-group">
									<label for="country">Paises:</label>
									<select class="form-control mb-2" id="country" name="country">
										@foreach($countriesListArray as $country)
											<option value="{{ $country['name']['common'] }}">{{ $country['name']['common'] }}</option>
										@endforeach
									</select>
								</div>
							</div>
						</div>
						<button class="btn btn-success" type="submit">Filtrar</button>

					</form>
					
				</div>

						<div class="row">
							<table class="table">
								<thead>
									<tr>
										<th scope="col">Name</th>
										<th scope="col">alpha_two_code</th>
										<th scope="col">domains</th>
										<th scope="col">country</th>
										<th scope="col">state-province</th>
										<th scope="col">web_pages</th>
                                        
										<th scope="col"></th>

									</tr>
								</thead>
								<tbody>
									@foreach($universityListArray as $item)

									<tr>
										<th scope="row">{{$item['name'] }}</th>
										<th>{{$item['alpha_two_code'] }}</th>
										<th>{{$item['domains'][0]}}</th>
										<td>{{$item['country']}}</td>
										<td>{{$item['state-province']}}</td>
										<td>{{$item['web_pages'][0]}}</td>
                                        
                                      
										

									</tr>



									<br>
									@endforeach
								</tbody>
							</table>
						</div>
						
					
				
			</div>
		</div>
	</div>
</div>

@endsection