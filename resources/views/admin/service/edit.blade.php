@extends('layouts.app')

<!--Summernote css-->
@section('css')

	<link href="{{ asset('vendor-admin/summernote/summernote.css') }}" rel="stylesheet">

@endsection
<!--End-->

@section('content')
	
	<div class="container">
		<form action="{{ route('service.update', ['id' => $service->id]) }}" method="post" enctype="multipart/form-data">
			
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
			    			<label for="intro">Introduction</label>
			    			<textarea name="intro" id="service-intro" class="form-control summernote" cols="3" rows="3">{!! $service->intro !!}</textarea>
			    		</div>
			    		
						<div class="form-group">
							<label for="intro_image">Image: Introduction</label>
							<input type="file" name="intro_image" class="form-control">
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
			    			<label for="body">Body</label>
			    			<textarea name="body" id="service-body" class="form-control summernote" cols="3" rows="3">{{ $service->body }}</textarea>
			    		</div>

						<div class="form-group">
							<label for="body_image">Image: Body</label>
							<input type="file" name="body_image" class="form-control">
						</div>
					
					</div>

				</div>
			</div>

			<div class="col-md-8" style="margin-bottom: 30px !important;">
				<button class="btn btn-success pull-right" type="submit">
					Update
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