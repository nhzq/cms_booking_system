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

				<!-- Error -->
				@if(count($errors) > 0)

					<div id="noti-growl"></div>

				@endif

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
				    			<label for="vision">Vision</label>
				    			<textarea name="vision" id="about-vision" class="form-control summernote" cols="3" rows="3"></textarea>
				    		</div>

				    		<div class="form-group">
								<label for="image_1">Vision Image</label>
								<input type="file" name="image_1" class="form-control">
							</div>

				    		<div class="form-group">
				    			<label for="mission">Mission</label>
				    			<textarea name="mission" id="about-mission" class="form-control summernote" cols="3" rows="3"></textarea>
				    		</div>

				    		<div class="form-group">
								<label for="image_2">Mission Image</label>
								<input type="file" name="image_2" class="form-control">
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

							<div class="form-group">
				    			<label for="body">Briefly explain about your company</label>
				    			<textarea name="body" id="about-body" class="form-control summernote" cols="3" rows="3"></textarea>
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

		<script>
			
	        $.bootstrapGrowl("The required input (*) cannot be left blank", {
	    		ele: '#noti-growl', // which element to append to
				type: 'danger', // (null, 'info', 'danger', 'success')
				offset: {from: 'top', amount: 20}, // 'top', or 'bottom'
				align: 'center', // ('left', 'right', or 'center')
				width: 'auto', // (integer, or 'auto')
				delay: 4000, // Time while the message will be displayed. It's not equivalent to the *demo* timeOut!
				allow_dismiss: true, // If true then will display a cross to close the popup.
				stackup_spacing: 10 // spacing between consecutively stacked growls.
	        });

		</script>

	@endsection
	<!--End-->