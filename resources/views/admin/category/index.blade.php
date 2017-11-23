@extends('layouts.app')

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
								<div class="well well-sm">{{ $category->name }}</div>
							</div>

							<div class="col-md-12">
								<p><span class="label label-info" style="font-size: 12px;">Subategory's Name</span></p>

								@if(count($category->subcategories) > 0)

									<table class="table table-bordered table-responsive">
										<thead>
											<tr>
												<th>No</th>
												<th>Name</th>
												<th>Edit</th>
												<th>Delete</th>
											</tr>
										</thead>
										<tbody>

											@foreach($category->subcategories as $sub)

												<tr>
													<td>{{++$i}}</td>
													<td>{{ $sub->name }}</td>
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