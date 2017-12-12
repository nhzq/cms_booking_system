@extends('layouts.app')

	@section('layoutRole')

		@include('layouts.webadmin.nav')

	@endsection

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
										<th>List</th>
										<th>Image</th>
										<th>Title</th>
										<th>Date</th>
										<th>Edit</th>
										<th>Delete</th>
									</tr>
								</thead>
								<tbody>

									@forelse($news as $post)

										<tr>
											<td>{{ ++$i }}</td>

											@if(count($post->image) > 0)

												<td><img src="{{ asset($post->image) }}" style="max-width: 70px;"></td>

											@else

												<td>No image</td>

											@endif

											<td>{{ $post->title }}</td>
											<td>{{ $post->created_at->toFormattedDateString() }}</td>
											<td>
												<a href="{{ route('webadmin.news.edit', ['id' => $post->id]) }}" class="btn btn-success">Edit</a>
											</td>
											<td>
												<a href="{{ route('webadmin.news.delete', ['id' => $post->id]) }}" class="btn btn-danger">Delete</a>
											</td>
										</tr>

									@empty

										<tr>
											<td>
												No records found
											</td>
										</tr>

									@endforelse

								</tbody>
							</table>

							<div class="pull-right">
								{{ $news->links() }}
							</div>

						</div>

					</div>
				</div>
			</div>

		</div>

	@endsection