@extends('layouts.app')

	@section('layoutRole')

		@include('layouts.systemadmin.nav')

	@endsection

	@section('content')

		<div class="container">
			<div class="col-md-8" style="margin-top: 30px !important;">

				@forelse($categories as $category)

					<div class="panel panel-primary">
						<div class="panel-heading">
							<h3 class="panel-title">
								Category: {{ $category->name }}
								<span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
							</h3>
						</div>

						<div class="panel-body">

							<div class="col-md-12">
								<p><span class="label label-info" style="font-size: 12px;">Category's Name</span></p>

								<table class="table">
									<thead>
										<tr>
											<th class="col-md-10">Item</th>
											<th class="col-md-1">Edit</th>
											<th class="col-md-1">Delete</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>{{ $category->name }}</td>
											<td><a href="{{ route('systemadmin.category.edit', ['id' => $category->id]) }}" class="btn btn-warning">Edit</a></td>
											<td><a href="" class="btn btn-danger">Delete</a></td>
										</tr>
									</tbody>
								</table>

							</div>

							<div class="col-md-12">
								<p><span class="label label-info" style="font-size: 12px;">Course</span></p>

								@if(count($category->subcategories) > 0)

									<table class="table table-responsive">
										<thead>
											<tr>
												<th class="col-md-10">Name</th>
												<th class="col-md-1">Edit</th>
											</tr>
										</thead>
										<tbody>

											@foreach($category->subcategories as $sub)

												<tr >
													<td>{{ $sub->name }}</td>
													<td><a href="{{ route('systemadmin.subcategory.edit', ['id' => $sub->id]) }}" class="btn btn-warning">Edit</a></td>
												</tr>

											@endforeach
											
										</tbody>
									</table>

								@else

									<p>No records found</p>

								@endif
							</div>

						</div>
					</div>

				@empty

					<div class="panel panel-primary">
						<div class="panel-heading">
							<h3 class="panel-title">
								Category: No records found
								<span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
							</h3>
						</div>

						<div class="panel-body">

							<div class="col-md-12">
								<p><span class="label label-info" style="font-size: 12px;">Category's Name</span></p>
								<div class="well well-sm">No records found</div>
							</div>

						</div>
					</div>

				@endforelse
				
			</div>

		</div>

	@endsection