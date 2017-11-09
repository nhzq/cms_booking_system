@extends('layouts.app')

@section('content')
	
	<div class="container">
		<form action="{{ route('homepage.update', ['id' => $homepage->id]) }}" method="post" enctype="multipart/form-data">
			
			{{ csrf_field() }}

			<div class="row">

				<!-- First Panel -->
				<div class="col-md-7">
				    <div class="panel panel-default">
				    	<div class="panel-heading">Section 1</div>

				    	<div class="panel-body">

				    		<div class="form-group">
				    			<label for="company_name">Company's Name</label>
				    			<input type="text" name="company_name" class="form-control" value="{{ $homepage->company_name }}">
				    		</div>

				    		<div class="form-group">
				    			<label for="phone">Phone Number</label>
				    			<input type="text" name="phone" class="form-control" value="{{ $homepage->phone }}">
				    		</div>

				    		<div class="form-group">
				    			<label for="email">Email</label>
				    			<input type="text" name="email" class="form-control" value="{{ $homepage->email }}">
				    		</div>
				    		
				    	</div>

				    </div>
				</div>

				<!-- Error -->
				@if(count($errors) > 0)

					<div class="col-md-4">
						<ul class="list-group">
							@foreach($errors->all() as $error)
								<li class="list-group-item text-danger">
									{{ $error }}
								</li>
							@endforeach			
						</ul>
					</div>

				@endif

				<!-- Second Panel -->
				<div class="col-md-7">
				    <div class="panel panel-default">
				    	<div class="panel-heading">Section 2</div>

				    	<div class="panel-body">

				    		<div class="form-group">
				    			<label for="header_image">Header's images</label>
				    			<input type="file" name="header_image" class="form-control">
				    		</div>
				    		
				    	</div>

				    </div>
				</div>
			
				<!-- Third Panel -->
				<div class="col-md-7">
				    <div class="panel panel-default">
				    	<div class="panel-heading">Section 3</div>

				    	<div class="panel-body">

				    		<div class="form-group">
				    			<label for="service_1">Company Expertise 1</label>
				    			<textarea name="service_1" class="form-control" cols="3" rows="3">{{ $homepage->service_1 }}</textarea>
				    		</div>

				    		<div class="form-group">
				    			<label for="service_2">Company Expertise 2</label>
				    			<textarea name="service_2" class="form-control" cols="3" rows="3">{{ $homepage->service_2 }}</textarea>
				    		</div>

				    		<div class="form-group">
				    			<label for="service_3">Company Expertise 3</label>
				    			<textarea name="service_3" class="form-control" cols="3" rows="3">{{ $homepage->service_3 }}</textarea>
				    		</div>

				    		<div class="form-group">
				    			<label for="service_4">Company Expertise 4</label>
				    			<textarea name="service_4" class="form-control" cols="3" rows="3">{{ $homepage->service_4 }}</textarea>
				    		</div>
				    		
				    	</div>

				    </div>
				</div>
				
				<!-- Forth Panel -->
				<div class="col-md-7">
				    <div class="panel panel-default">
				    	<div class="panel-heading">Section 4</div>

				    	<div class="panel-body">

				    		<div class="form-group">
				    			<label for="headline">Headline/motto company</label>
				    			<textarea name="headline" class="form-control" cols="3" rows="3">{{ $homepage->headline }}</textarea>
				    		</div>

				    		<div class="form-group">
				    			<label for="headline_brief">Explain a bit about company motto/headline</label>
				    			<textarea name="headline_brief" class="form-control" cols="3" rows="3">{{ $homepage->headline_brief }}</textarea>
				    		</div>

				    		<div class="form-group">
				    			<label for="services_brief">Explain a bit about company's services</label>
				    			<textarea name="services_brief" class="form-control" cols="3" rows="3">{{ $homepage->services_brief }}</textarea>
				    		</div>
				    		
				    	</div>

				    </div>
				</div>

			</div>

			<div class="form-group">
				<button class="btn btn-success" type="submit">
					Update
				</button>
			</div>

		</form>
    </div>

@endsection