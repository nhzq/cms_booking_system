@extends('layouts.landing-page')

	@section('css')

		<style>
			
			.font-size-table {
				font-size: 14px;
			}

			.btn-style	{
				font-size: 13px; 
				border-radius: 4px;
			}


		</style>

	@endsection

	@section('content')
		<section>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul class="nav nav-pills nav-justified img-thumbnail">
							<li class="nav-item">
								<a class="nav-link disabled" href="#">
									<h5 class="list-group-item-heading">Step 1</h5>
	                    			<p class="list-group-item-text">Company Information</p>
                    			</a>
							</li>
							<li class="nav-item">
								<a class="nav-link disabled" href="#">
									<h5 class="list-group-item-heading">Step 2</h5>
	                    			<p class="list-group-item-text">Participants</p>
                    			</a>
							</li>
							<li class="nav-item">
								<a class="nav-link active" href="#">
									<h5 class="list-group-item-heading">Step 3</h5>
	                    			<p class="list-group-item-text">Confirmation</p>
                    			</a>
							</li>
						</ul>
					</div>
				</div>

				<br>
				<br>

				<div class="col-md-10 offset-1">

					<form action="{{ route('event.register.store.confirm', ['id' => $event->id]) }}" method="post">
						{{ csrf_field() }}
						
						<div class="row">

							<div class="col-md-7">
								<div class="card">
									<div class="card-header">
										Review
									</div>

									<div class="card-body">
										<h5>Training Details</h5>
										<table class="table table-bordered table-responsive">
											<tr>
												<th>Training</th>
												<td>{{ $event->training->subcategory->name }}</td>
											</tr>
											<tr>
												<th>Venue</th>
												<td>{{ $event->training->location->name }}</td>
											</tr>
											<tr>
												<th>Date</th>
												<td>{{ $event->training->start_date->format('j') . ' - ' . $event->training->end_date->format('j F Y') }}</td>
											</tr>
											<tr>
												<th>Fee</th>
												<td>{{ 'RM' . $event->training->fee }}</td>
											</tr>
										</table>
									</div>
								</div>
							</div>
						
							<div class="col-md-5">
								<div class="card">
									<div class="card-header">
										Total Fees
									</div>

									<div class="card-body">
										<div class="row">
											<div class="col-md-12">
												
												<table class="summary">
													<tbody>
														<tr>
															<th class="col-md-10">Total Participants</th>
															<td class="pull-right total-people">{{ count($event->participants) }}</td>
														</tr>
														<tr>
															<th class="col-md-10">Fee/Participants</th>
															<td class="pull-right">{{ 'RM' . $event->training->fee }}</td>
														</tr>
														<tr>
															<th class="col-md-10">Total</th>
															<td class="pull-right table-bordered"><b>{{ 'RM' . $total }}</b></td>
														</tr>
													</tbody>
												</table>
											
							                </div>
						                </div>
									</div>
								</div>
							</div>

						</div>
						<div class="" style="margin-top: 30px !important;">
							<button class="btn btn-success btn-style pull-right" type="submit">
								Submit
							</button>
						</div>

					</form>

				</div>
			</div>
		</section>

	@endsection