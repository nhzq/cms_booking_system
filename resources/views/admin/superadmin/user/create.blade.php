@extends('layouts.app')

	@section('layoutRole')
		
		@include('layouts.superadmin.nav')

	@endsection

	@section('content')

		<div class="container">
			<div class="col-md-8" style="margin-top: 30px !important;">

				@if($errors->count() > 0)
					@foreach($errors->all() as $error)
						{{ $error }}
					@endforeach
				@endif

				<form action="{{ route('superadmin.user.store') }}" method="post" enctype="multipart/form-data">

					{{ csrf_field() }}

					<div class="panel panel-primary">
						<div class="panel-heading">
							<h3 class="panel-title">
								Add User
								<span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
							</h3>
						</div>

						<div class="panel-body">

							<div class="panel-body">
								<div class="form-group">
									<label for="username">Username</label>
									<input type="text" name="username" class="form-control">
								</div>

								<div class="form-group">
									<label for="role">Role</label>
									<select name="name" id="" class="form-control">

										@foreach($roles as $role)

											<option value="{{ $role->name }}">{{ $role->name }}</option>

										@endforeach

									</select>
								</div>

								<div class="form-group">
									<label for="email">Email</label>
									<input type="text" name="email" class="form-control">
								</div>

								<div class="form-group">
									<label for="password">Password</label>
									<input type="password" name="password" class="form-control" value="">
								</div>
							</div>

							<div class="col-md-12" style="margin-bottom: 30px !important;">
								<button class="btn btn-success pull-right" type="submit">
									Save
								</button>
							</div>



						</div>
					</div>

				</form>
				
			</div>

		</div>

	@endsection