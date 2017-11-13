@extends('layouts.app')

@section('content')
	
	<div class="container">
		<form action="{{ route('about.update', ['id' => $about->id ]) }}" method="post" enctype="multipart/form-data">
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
			    			<label for="vision">Vision</label>
			    			<textarea name="vision" class="form-control" cols="3" rows="3">{{ $about->vision }}</textarea>
			    		</div>

			    		<div class="form-group">
			    			<label for="mission">Mission</label>
			    			<textarea name="mission" class="form-control" cols="3" rows="3">{{ $about->mission }}</textarea>
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
			    			<label for="body">Briefly explain about your company</label>
			    			<textarea name="body" class="form-control" cols="3" rows="3">{{ $about->body }}</textarea>
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
