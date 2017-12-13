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
			<form action="{{ route('webadmin.news.update', ['id' => $news->id]) }}" method="post" enctype="multipart/form-data">
				
				{{ csrf_field() }}

				<div class="col-md-8" style="margin-top: 30px !important;">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h3 class="panel-title">
								Edit news post
								<span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
							</h3>
						</div>

						<div class="panel-body">

							<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
				    			<label for="title">Post Title</label>
				    			<input type="text" name="title" class="form-control" value="{{ $news->title }}">

				    			@if($errors->has('title'))

					    			<div class="text-danger">
										Please insert post title
									</div>

								@endif

				    		</div>

				    		<div class="form-group">
								<label for="image">Image: Post</label>
								<input type="file" name="image" class="form-control">
							</div>

				    		<div class="form-group {{ $errors->has('content') ? 'has-error' : '' }}">
				    			<label for="content">Content</label>
				    			<textarea name="content" id="news-content" class="form-control summernote" cols="3" rows="3">{{ $news->content }}</textarea>

				    			@if($errors->has('content'))

					    			<div class="text-danger">
										Please insert post content
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