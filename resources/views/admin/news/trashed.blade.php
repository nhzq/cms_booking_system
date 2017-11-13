@extends('layouts.app')

@section('content')

	<div class="container">
		<div class="col-md-8" style="margin-top: 30px !important;">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">
						List of News Posts
						<span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
					</h3>
				</div>

				<div class="panel-body">
					<div class="col-md-12">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>Image</th>
									<th>Title</th>
									<th>Edit</th>
									<th>Delete</th>
								</tr>
							</thead>
							<tbody>

								@if($trashed->count() == 0) 

									<tr>
										<td><b>No post has been trashed</b></td>
									</tr>

								@endif

								@foreach($trashed as $post)

									<tr>
										<td>John</td>
										<td>{{ $post->title }}</td>
										<td>
											<a href="{{ route('news.restore', ['id' => $post->id]) }}" class="btn btn-success">Restore</a>
										</td>
										<td>
											<a href="{{ route('news.kill', ['id' => $post->id]) }}" class="btn btn-danger">Delete</a>
										</td>
									</tr>

								@endforeach

							</tbody>
						</table>
					</div>
				</div>

			</div>
		</div>

	</div>

@endsection