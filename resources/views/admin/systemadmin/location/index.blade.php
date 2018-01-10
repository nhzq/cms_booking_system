@extends('layouts.app')

	@section('layoutRole')
		
		@include('layouts.systemadmin.nav')

	@endsection

	@section('content')

		<div class="container">
			<div class="col-md-8" style="margin-top: 30px !important;">

				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">
							Training Location
							<span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
						</h3>
					</div>

					<div class="panel-body">

						@if($locations->count() > 0)

							<table class="table table-bordered">
								<thead>
									<tr>
										<th class="col-md-1">No</th>
										<th class="col-md-9">Location's Name</th>
										<th class="col-md-1">Edit</th>
									</tr>
								</thead>
								<tbody>

									@foreach($locations as $location)

										<tr>
											<td>{{ ++$i }}</td>
											<td>{{ $location->name }}</td>
											<td><a href="{{ route('systemadmin.location.edit', ['id' => $location->id]) }}" class="btn btn-warning">Edit</a></td>
										</tr>

									@endforeach

								</tbody>
							</table>

						@else

							No records found

						@endif

					</div>
				</div>
				
			</div>

		</div>

	@endsection