@extends('layouts.app')

<!--Summernote css-->
@section('css')

	<link href="{{ asset('vendor-admin/summernote/summernote.css') }}" rel="stylesheet">

@endsection
<!--End-->

@section('content')

	<div class="container">
		<form action="{{ route('news.store') }}" method="post" enctype="multipart/form-data">
			
			{{ csrf_field() }}

			<div class="col-md-8" style="margin-top: 30px !important;">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">
							Create news post
							<span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
						</h3>
					</div>

					<div class="panel-body">

						<div class="form-group">
			    			<label for="title">Post Title</label>
			    			<input type="text" name="title" class="form-control">
			    		</div>

			    		<div class="form-group">
			    			<label for="content">Content</label>
			    			<textarea name="content" id="news-content" class="form-control" cols="10" rows="10"></textarea>
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