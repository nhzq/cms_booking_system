@extends('layouts.app')

@section('css')

	<link href="{{ asset('vendor-admin/datepicker/gijgo.css') }}" rel="stylesheet" type="text/css" />

@endsection

@section('content')
	
	<div class="container">
		<form action="{{ route('training.store') }}" method="post" enctype="multipart/form-data">
			
			{{ csrf_field() }}

			<div class="col-md-8" style="margin-top: 30px !important;">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">
							Add Training Details
							<span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
						</h3>
					</div>

					<div class="panel-body">

			    		<div class="form-group">
			    			<label for="category">Please select category</label>
			    			<select name="category_id" id="category" class="form-control">
			    				<option value="">Choose one</option>

			    				@forelse($cats as $cat)
									
									<option value="{{ $cat->id }}">{{ $cat->name }}</option>

			    				@empty

			    					<option value="">No records found</option>

			    				@endforelse

			    			</select>
			    		</div>

			    		<div class="form-group">
			    			<label for="subcategory">Please select subcategory</label>
			    			<select name="subcategory_id" id="subcategory" class="form-control">
			    				

			    			</select>
			    		</div>

			    		<div class="form-group">
			    			<label for="training date">Please choose training date</label>
			    			<input id="datepicker" name="training_date">
			    		</div>
			    		
			    		<div class="form-group">
			    			<label for="slocation">Please select venue</label>
			    			<select name="location_id" id="location" class="form-control">
			    				<option value="">Choose one</option>

			    				@forelse($locations as $location)
									
									<option value="{{ $location->id }}">{{ $location->name }}</option>

			    				@empty

			    					<option value="">No records found</option>

			    				@endforelse
	
			    			</select>
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

@section('script')

	<script src="{{ asset('vendor-admin/datepicker/gijgo.js') }}"></script>

	<script>

		$(function() {
			$('#datepicker').datepicker({
				uiLibrary: 'bootstrap4',
				iconsLibrary: 'fontawesome'
			});
		});

		$('#category').on('change', function() {

			var cat_id = $(this).val();
			var op = " ";

			$.ajax({
				type:'GET',
				url:'{{ route('training.subcat') }}',
				data: {'id':cat_id},
				success:function(data) {

					op = op + '<option value="">Choose one</option>';

					for(var i = 0; i < data.length; i++) {
						op = op + '<option value="' + data[i].id + '">' + data[i].name + '</option>'; 
					}
					
					$('#subcategory').html(" ");
					$('#subcategory').append(op);

				},
				error:function() {
					console.log("There is an error with your AJAX");
				}
			});


		});

	</script>

@endsection