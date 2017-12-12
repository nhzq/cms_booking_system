@extends('layouts.app')

	@section('layoutRole')
	
		@include('layouts.systemadmin.nav')
		
	@endsection

	@section('content')
		
		<div class="container">
			<form action="{{ route('systemadmin.location.store') }}" method="post" enctype="multipart/form-data">
				
				{{ csrf_field() }}

				<div class="col-md-8" style="margin-top: 30px !important;">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h3 class="panel-title">
								Add Location
								<span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
							</h3>
						</div>

						<div class="panel-body">

							<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
				    			<label for="category">Location's Name</label>
				    			<input type="text" class="form-control" name="name">

				    			@if($errors->has('name'))

					    			<div class="text-danger">
										Please enter a location before save
									</div>

								@endif

				    		</div>

						</div>

					</div>
				</div>

				<div class="col-md-8" style="margin-bottom: 30px !important;">
					<button class="btn btn-success pull-right" type="submit">
						Save
					</button>
				</div>

				

			</form>
	    </div>

	@endsection