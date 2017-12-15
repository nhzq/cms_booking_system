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
							<h4>Available Trainings</h4>
						</div>

						<div class="table-responsive">

							<table class="table table-bordered">
								<thead>
									<tr>
										<th>No</th>
										<th>Category</th>
										<th>Course</th>
										<th>Date</th>
										<th>Details</th>
									</tr>
								</thead>
								<tbody>

									@include('includes.event-subcat-list')

								</tbody>
							</table>

						</div>
						
					</div>

				</div>
			</div>
		</section>

	@endsection