@extends('layouts.app')

	@section('layoutRole')

		@include('layouts.webadmin.nav')

	@endsection

	@section('content')
		
		<div class="container">
			<form action="{{ route('webadmin.homepage.store') }}" method="post" enctype="multipart/form-data">
				
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

							<div class="form-group {{ $errors->has('company_name') ? 'has-error' : '' }}">
				    			<label for="company_name">Company's Name</label>
				    			<input type="text" name="company_name" class="form-control">

				    			@if($errors->has('company_name'))

					    			<div class="text-danger">
										Please insert company's name
									</div>

								@endif

				    		</div>

				    		<div class="form-group {{ $errors->has('headline') ? 'has-error' : '' }}">
				    			<label for="headline">Headline/motto company</label>
				    			<textarea name="headline" class="form-control" cols="3" rows="3"></textarea>

				    			@if($errors->has('headline'))

					    			<div class="text-danger">
										Please insert company's headline
									</div>

								@endif

				    		</div>

				    		<div class="form-group {{ $errors->has('headline_brief') ? 'has-error' : '' }}">
				    			<label for="headline_brief">Briefly explain about company motto/headline</label>
				    			<textarea name="headline_brief" class="form-control" cols="3" rows="3"></textarea>

				    			@if($errors->has('headline_brief'))

					    			<div class="text-danger">
										Please briefly explain about company's headline/motto
									</div>

								@endif

				    		</div>

				    		<div class="row">
								<div class="col-md-4">
									<div class="form-group {{ $errors->has('header_image') ? 'has-error' : '' }}">
										<label for="header_image">Slide Image 1</label>
										<input type="file" name="header_image" class="form-control">

										@if($errors->has('header_image'))

							    			<div class="text-danger">
												Please insert an image for slider
											</div>

										@endif

									</div>
								</div>
								
								<div class="col-md-4">
									<div class="form-group {{ $errors->has('header_image_2') ? 'has-error' : '' }}">
										<label for="header_image_2">Slide Image 2</label>
										<input type="file" name="header_image_2" class="form-control">

										@if($errors->has('header_image_2'))

							    			<div class="text-danger">
												Please insert an image for slider
											</div>

										@endif

									</div>
								</div>

								<div class="col-md-4">
									<div class="form-group {{ $errors->has('header_image_3') ? 'has-error' : '' }}">
										<label for="header_image_3">Slide Image 3</label>
										<input type="file" name="header_image_3" class="form-control">

										@if($errors->has('header_image_3'))

							    			<div class="text-danger">
												Please insert an image for slider
											</div>

										@endif

									</div>
								</div>
							</div>

						</div>

					</div>
				</div>

				<div class="col-md-8">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h3 class="panel-title">
								Section 2
								<span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
							</h3>
						</div>
							
						<div class="panel-body">

							<div class="form-group {{ $errors->has('services_brief') ? 'has-error' : '' }}">
				    			<label for="services_brief">Briefly explain about company services</label>
				    			<textarea name="services_brief" class="form-control" cols="3" rows="3"></textarea>

				    			@if($errors->has('services_brief'))

					    			<div class="text-danger">
										Please insert brief explanation about company services
									</div>

								@endif

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

							<div class="form-group {{ $errors->has('service_1') ? 'has-error' : '' }}">
				    			<label for="service_1">1. Company's strength</label>
				    			<textarea name="service_1" class="form-control" cols="3" rows="3"></textarea>

				    			@if($errors->has('service_1'))

					    			<div class="text-danger">
										Please insert company's strength
									</div>

								@endif

				    		</div>

				    		<div class="form-group {{ $errors->has('service_2') ? 'has-error' : '' }}">
				    			<label for="service_2">2. Company's strength</label>
				    			<textarea name="service_2" class="form-control" cols="3" rows="3"></textarea>

				    			@if($errors->has('service_2'))

					    			<div class="text-danger">
										Please insert company's strength
									</div>

								@endif

				    		</div>

				    		<div class="form-group {{ $errors->has('service_3') ? 'has-error' : '' }}">
				    			<label for="service_3">3. Company's strength</label>
				    			<textarea name="service_3" class="form-control" cols="3" rows="3"></textarea>

				    			@if($errors->has('service_3'))

					    			<div class="text-danger">
										Please insert company's strength
									</div>

								@endif

				    		</div>

				    		<div class="form-group {{ $errors->has('service_4') ? 'has-error' : '' }}">
				    			<label for="service_4">4. Company's strength</label>
				    			<textarea name="service_4" class="form-control" cols="3" rows="3"></textarea>

				    			@if($errors->has('service_4'))

					    			<div class="text-danger">
										Please insert company's strength
									</div>

								@endif

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

							<div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
				    			<label for="phone">Telephone Number</label>
				    			<input type="text" name="phone" class="form-control">

				    			@if($errors->has('phone'))

					    			<div class="text-danger">
										Please insert company's telephone number
									</div>

								@endif

				    		</div>

							<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
				    			<label for="email">Email</label>
				    			<input type="text" name="email" class="form-control">

				    			@if($errors->has('email'))

					    			<div class="text-danger">
										Please insert company's email address
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

