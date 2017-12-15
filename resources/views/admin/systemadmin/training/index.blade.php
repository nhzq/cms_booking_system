@extends('layouts.app')

	@section('layoutRole')

		@include('layouts.systemadmin.nav')
		
	@endsection

	@section('content')

		<div class="container">
			<div class="col-md-10" style="margin-top: 30px !important;">

				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">
							Training Details
							<span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
						</h3>
					</div>

					<div class="panel-body">

						<div class="col-md-12">
							<p><span class="label label-info" style="font-size: 12px;">Training List</span></p>

							@if(count($training) > 0)

								<table class="table table-bordered table-responsive">
									<thead>
										<tr>
											<th>No</th>
											<th>Category</th>
											<th>Course</th>
											<th>Start Date</th>
											<th>End Date</th>
											<th>Venue</th>
											<th>Edit</th>
											<th>Delete</th>

										</tr>
									</thead>
									<tbody>

										@foreach($training as $event)

											<tr>
												<td>{{ ++$i }}</td>
												<td>{{ $event->category->name }}</td>
												<td>{{ $event->subcategory->name }}</td>
												<td>{{ $event->start_date->toFormattedDateString() }}</td>
												<td>{{ $event->end_date->toFormattedDateString() }}</td>
												<td>{{ $event->location->name }}</td>
												<td><a href="{{ route('systemadmin.training.edit', ['id' => $event->id]) }}" class="btn btn-warning">Edit</a></td>
												<td><a href="" class="btn btn-danger">Delete</a></td>
											</tr>

										@endforeach

									</tbody>
								</table>

							@else

								<div class="well well-sm">No records found</div>

							@endif
						</div>

					</div>
				</div>

			</div>

		</div>

	@endsection