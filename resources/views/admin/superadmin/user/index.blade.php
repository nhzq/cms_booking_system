@extends('layouts.app')

	@section('layoutRole')
		
		@include('layouts.superadmin.nav')

	@endsection

	@section('content')

		<div class="container">
			<div class="col-md-8" style="margin-top: 30px !important;">

				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">
							User Management
							<span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
						</h3>
					</div>

					<div class="panel-body">

						<table class="table table-bordered">

							@if($users->count() > 0)

								<thead>
									<tr>
										<th class="col-md-1">No</th>
										<th class="col-md-2">Username</th>
										<th class="col-md-3">Role</th>
										<th class="col-md-3">Email</th>
										<th class="col-md-1">Edit</th>
										<th class="col-md-1">Delete</th>
									</tr>
								</thead>
								<tbody>

									@foreach($users as $user)

										<tr>
											<td>{{ ++$i }}</td>
											<td>{{ $user->username }}</td>
											<td>{{ $user->name }}</td>
											<td>{{ $user->email }}</td>
											<td><a href="{{ route('superadmin.user.edit', ['id' => $user->id]) }}" class="btn btn-warning">Edit</a></td>
											<td><a href="{{ route('superadmin.user.delete', ['id' => $user->id]) }}" class="btn btn-danger">Delete</a></td>
										</tr>

									@endforeach

								</tbody>

							@else

								No records found
		
							@endif

						</table>

						<div style="margin-bottom: 30px !important;">
							<a href="{{ route('superadmin.user.create') }}" class="btn btn-success pull-right">Add New User</a>
						</div>

					</div>
				</div>
				
			</div>

		</div>

	@endsection