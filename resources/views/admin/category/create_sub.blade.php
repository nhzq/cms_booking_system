@extends('layouts.app')

@section('content')
	
	<div class="container">
		<form action="{{ route('subcategory.store') }}" method="post" enctype="multipart/form-data">
			
			{{ csrf_field() }}

			<div class="col-md-8" style="margin-top: 30px !important;">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">
							Add Training SubCategory
							<span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
						</h3>
					</div>

					<div class="panel-body">
						
						
							@if(count($errors) > 0)
								@foreach($errors->all() as $error)
								<p>{{ $error }}</p>
								@endforeach
							@endif
							<div class="form-group">
								<label for="category">Please select category first:</label>
								<select name="category_id" id="" class="form-control">
									<option value="">Choose one</option>

									@forelse($categories as $category)

										<option value="{{ $category->id }}">{{ $category->name }}</option>

									@empty

										<option value="">No records found</option>

									@endforelse

								</select>
							</div>

						<div class="form-group">
			    			<label for="sub">SubCategory</label>
			    			<input type="text" class="form-control" name="name">
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