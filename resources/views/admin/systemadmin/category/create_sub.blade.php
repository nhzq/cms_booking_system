@extends('layouts.app')

	@section('layoutRole')

		@include('layouts.systemadmin.nav')

	@endsection

	@section('content')
		
		<div class="container">
			<form action="{{ route('systemadmin.subcategory.store') }}" method="post" enctype="multipart/form-data">
				
				{{ csrf_field() }}

				<div class="col-md-8" style="margin-top: 30px !important;">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h3 class="panel-title">
								Add Training Course
								<span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
							</h3>
						</div>

						<div class="panel-body">

							<div class="form-group {{ $errors->has('category_id') ? 'has-error' : '' }}">
								<label for="category">Please select category first:</label>
								<select name="category_id" id="" class="form-control">
									<option value="">Choose one</option>

									@forelse($categories as $category)

										<option value="{{ $category->id }}">{{ $category->name }}</option>

									@empty

										<option value="">No records found</option>

									@endforelse

								</select>

								@if($errors->has('category_id'))

					    			<div class="text-danger">
										Please select a category before save
									</div>

								@endif

							</div>

							<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
				    			<label for="sub">Course</label>
				    			<input type="text" class="form-control" name="name">

				    			@if($errors->has('name'))

					    			<div class="text-danger">
										Please enter a course before save
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