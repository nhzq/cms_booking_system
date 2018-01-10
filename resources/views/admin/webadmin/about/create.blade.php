@extends('layouts.app')

	<!--Summernote css-->
	@section('css')

		<link href="{{ asset('vendor-admin/summernote/summernote.css') }}" rel="stylesheet">

	@endsection
	<!--End-->

	@section('layoutRole')

		@include('layouts.webadmin.nav')

	@endsection

	@section('content')
		
		<div class="container">
			<form id="about-create" action="{{ route('webadmin.about.store') }}" method="post" enctype="multipart/form-data">
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

							<div class="form-group {{ $errors->has('vision') ? 'has-error' : '' }}">
				    			<label for="vision">Vision</label>
				    			<textarea name="vision" id="about-vision" class="form-control summernote" cols="3" rows="3"></textarea>

				    			@if($errors->has('vision'))

					    			<div class="text-danger">
										Please enter company's vision before save
									</div>

								@endif

				    		</div>

				    		<div class="form-group {{ $errors->has('image_1') ? 'has-error' : '' }}">
								<label for="image_1">Vision Image</label>
								<input type="file" name="image_1" class="form-control">

								@if($errors->has('image_1'))

					    			<div class="text-danger">
										Please upload any relevant image before save
									</div>

								@endif

							</div>

				    		<div class="form-group {{ $errors->has('mission') ? 'has-error' : '' }}">
				    			<label for="mission">Mission</label>
				    			<textarea name="mission" id="about-mission" class="form-control summernote" cols="3" rows="3"></textarea>

				    			@if($errors->has('mission'))

					    			<div class="text-danger">
										Please enter company's mission before save
									</div>

								@endif

				    		</div>

				    		<div class="form-group {{ $errors->has('image_2') ? 'has-error' : '' }}">
								<label for="image_2">Mission Image</label>
								<input type="file" name="image_2" class="form-control">

								@if($errors->has('image_2'))

					    			<div class="text-danger">
										Please upload any relevant image before save
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
								Section 2
								<span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
							</h3>
						</div>
							
						<div class="panel-body">

							<div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}">
				    			<label for="body">Briefly explain about your company</label>
				    			<textarea name="body" id="about-body" class="form-control summernote" cols="3" rows="3"></textarea>

				    			@if($errors->has('body'))

					    			<div class="text-danger">
										Please insert brief explanation about company
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

	<!--Summernote JS-->
	@section('script')

		@include('includes.summernote')

	@endsection
	<!--End-->