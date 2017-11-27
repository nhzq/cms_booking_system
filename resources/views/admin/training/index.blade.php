@extends('layouts.app')

	@section('content')

		<div class="container">
			<div class="col-md-8" style="margin-top: 30px !important;">

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
											<th>Event's Category</th>
											<th>Event's Subcategory</th>
											<th>Date</th>
											<th>Venue</th>
										</tr>
									</thead>
									<tbody>

										@foreach($training as $event)

											<tr>
												<td>{{ ++$i }}</td>
												<td>{{ $event->category->name }}</td>
												<td>{{ $event->subcategory->name }}</td>
												<td>{{ $event->training_date->toFormattedDateString() }}</td>
												<td>{{ $event->location->name }}</td>
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

			</div>

		</div>

	@endsection