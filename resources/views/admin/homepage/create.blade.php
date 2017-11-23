@extends('layouts.app')

@section('content')
	
	<div class="container">
		<form action="{{ route('homepage.store') }}" method="post" enctype="multipart/form-data">
			
			{{ csrf_field() }}

			<div class="col-md-8" style="margin-top: 30px !important;">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">
							Section 1
							<span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
						</h3>
					</div>

					<div class="panel-body">

						<div class="form-group">
			    			<label for="company_name">Company's Name</label>
			    			<input type="text" name="company_name" class="form-control">
			    		</div>

			    		<div class="form-group">
			    			<label for="headline">Headline/motto company</label>
			    			<textarea name="headline" class="form-control" cols="3" rows="3"></textarea>
			    		</div>

			    		<div class="form-group">
			    			<label for="headline_brief">Briefly explain about company motto/headline</label>
			    			<textarea name="headline_brief" class="form-control" cols="3" rows="3"></textarea>
			    		</div>

			    		<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="header_image">Slide Image 1</label>
									<input type="file" name="header_image" class="form-control">
								</div>
							</div>
							
							<div class="col-md-4">
								<div class="form-group">
									<label for="header_image_2">Slide Image 2</label>
									<input type="file" name="header_image_2" class="form-control">
								</div>
							</div>

							<div class="col-md-4">
								<div class="form-group">
									<label for="header_image_3">Slide Image 3</label>
									<input type="file" name="header_image_3" class="form-control">
								</div>
							</div>
						</div>

					</div>

				</div>
			</div>

			<!-- Error -->
			@if(count($errors) > 0)

				<div class="col-md-4" style="margin-top: 30px !important;">
					<ul class="list-group">
						@foreach($errors->all() as $error)
							<li class="list-group-item text-danger">
								{{ $error }}
							</li>
						@endforeach			
					</ul>
				</div>

			@endif

			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">
							Section 2
							<span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
						</h3>
					</div>
						
					<div class="panel-body">

						<div class="form-group">
			    			<label for="services_brief">Briefly explain about company services</label>
			    			<textarea name="services_brief" class="form-control" cols="3" rows="3"></textarea>
			    		</div>
					
					</div>

				</div>
			</div>

			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">
							Section 3
							<span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
						</h3>
					</div>
						
					<div class="panel-body">

						<div class="form-group">
			    			<label for="service_1">1. Company's strength</label>
			    			<textarea name="service_1" class="form-control" cols="3" rows="3"></textarea>
			    		</div>

			    		<div class="form-group">
			    			<label for="service_2">2. Company's strength</label>
			    			<textarea name="service_2" class="form-control" cols="3" rows="3"></textarea>
			    		</div>

			    		<div class="form-group">
			    			<label for="service_3">3. Company's strength</label>
			    			<textarea name="service_3" class="form-control" cols="3" rows="3"></textarea>
			    		</div>

			    		<div class="form-group">
			    			<label for="service_4">4. Company's strength</label>
			    			<textarea name="service_4" class="form-control" cols="3" rows="3"></textarea>
			    		</div>
					
					</div>

				</div>
			</div>

			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">
							Section 4
							<span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
						</h3>
					</div>
						
					<div class="panel-body">

						<div class="form-group">
			    			<label for="phone">Phone Number</label>
			    			<input type="text" name="phone" class="form-control">
			    		</div>

						<div class="form-group">
			    			<label for="email">Email</label>
			    			<input type="text" name="email" class="form-control">
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

