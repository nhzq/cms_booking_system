@extends('layouts.landing-page')

	@section('css')

		<style>
			
			.font-size-table {
				font-size: 14px;
			}

		</style>

	@endsection

	@section('content')

		<section>
			<div class="container">
				<div class="row">

					<div class="col-md-4">
						<div class="list-group">

							<div class="" style="margin: 0 0 10px 0; text-transform: uppercase;">
								<h6>Trainings Category</h6>
							</div>

							@include('includes.event-category')

						</div>
					</div>
					<div class="col-md-8">

						<div class="text-center" style="margin: 0 0 10px 0; text-transform: uppercase;">
							<h4>Training Details</h4>
						</div>

						<div class="table-responsive">

							<table class="table table-bordered">
								<tbody>
									<tr>
										<th>Training</th>
										<td>{{ $training->category->name }}</td>
									</tr>
									<tr>
										<th>Venue</th>
										<td>{{ $training->location->name }}</td>
									</tr>
									<tr>
										<th>Date</th>
										<td>{{ $training->start_date->format('j') . ' - ' . $training->end_date->format('j F Y') }}</td>
									</tr>
									<tr>
										<th>Fee</th>
										<td></td>
									</tr>
								</tbody>
							</table>

						</div>
						
					</div>

				</div>
			</div>
		</section>

	@endsection