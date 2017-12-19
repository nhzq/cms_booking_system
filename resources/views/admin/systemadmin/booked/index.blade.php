@extends('layouts.app')

	@section('layoutRole')

		@include('layouts.systemadmin.nav')

	@endsection

	@section('content')

		<div class="container">
			<div class="col-md-11" style="margin-top: 30px !important;">

				<h3 class="text-center">Booking Training</h3>

				<table class="table table-bordered">

					@if($events->count() > 0)

						<thead>
							<tr>
								<th>No</th>
								<th>Training</th>
								<th>Company's Name</th>
								<th>Date</th>
								<th>Details</th>
								<th>Download</th>
							</tr>
						</thead>
						<tbody>

							@foreach($events as $event)

								<tr>
									<td>{{ ++$i }}</td>
									<td>{{ $event->training->subcategory->name }}</td>
									<td>{{ $event->name }}</td>
									<td>{{ $event->training->start_date->format('j') . ' - ' . $event->training->end_date->format('j F Y') }}</td>
									<td><a href="{{ route('systemadmin.details', ['id' => $event->id]) }}">Details</a></td>
									<td>download</td>
								</tr>

							@endforeach

						</tbody>

					@else

						No records found

					@endif

				</table>
				
			</div>

		</div>

	@endsection