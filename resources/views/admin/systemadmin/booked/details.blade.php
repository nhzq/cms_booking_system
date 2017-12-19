@extends('layouts.app')

	@section('layoutRole')

		@include('layouts.systemadmin.nav')

	@endsection

	@section('content')

		<div class="container">
			<div class="col-md-9" style="margin-top: 30px !important;">

				<h3>Training Details</h3>

				<div class="panel panel-default">
					<div class="panel-heading">Client: {{ $event->name }}</div>
					<div class="panel-body">
						<table class="table table-bordered">
							<tr>
								<th class="col-md-3">Training Name</th>
								<td class="col-md-9">{{ $event->training->subcategory->name }}</td>
							</tr>
							<tr>
								<th class="col-md-3">Venue</th>
								<td class="col-md-9">{{ $event->training->location->name }}</td>
							</tr>
							<tr>
								<th class="col-md-3">Venue</th>
								<td class="col-md-9">{{ $event->training->location->name }}</td>
							</tr>
						</table>
					</div>
					<div class="panel-body">
						<h4>Company Details</h4>
						<table class="table table-bordered">
							<tr>
								<th class="col-md-3">Company's Name</th>
								<td class="col-md-9">{{ $event->name }}</td>
							</tr>
							<tr>
								<th class="col-md-3">Address</th>
								<td class="col-md-9">{{ $event->address }}</td>
							</tr>
							<tr>
								<th class="col-md-3">Reg. No</th>
								<td class="col-md-9">{{ $event->reg_no }}</td>
							</tr>
							<tr>
								<th class="col-md-3">Person In Charge</th>
								<td class="col-md-9">{{ $event->person }}</td>
							</tr>
							<tr>
								<th class="col-md-3">Position</th>
								<td class="col-md-9">{{ $event->position }}</td>
							</tr>
							<tr>
								<th class="col-md-3">Telephone</th>
								<td class="col-md-9">{{ $event->phone }}</td>
							</tr>
							<tr>
								<th class="col-md-3">Emel</th>
								<td class="col-md-9">{{ $event->email }}</td>
							</tr>
							<tr>
								<th class="col-md-3">Website</th>
								<td class="col-md-9">{{ $event->website }}</td>
							</tr>
						</table>
					</div>
					<div class="panel-body">
						<h4>Participants</h4>
						<table class="table table-bordered">

							<thead>
								<tr>
									<th class="col-md-3">No</th>
									<th class="col-md-9">Name</th>
								</tr>
							</thead>

							@foreach($participants as $data)

								<tbody>
									<tr>
										<td class="col-md-3">{{++$i}}</td>
										<td class="col-md-9">{{ $data->name }}</td>
									</tr>
								</tbody>

							@endforeach

						</table>
					</div>
				</div>
				
			</div>

		</div>

	@endsection