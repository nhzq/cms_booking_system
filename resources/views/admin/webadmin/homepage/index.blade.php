@extends('layouts.app')

	@section('layoutRole')

		@include('layouts.webadmin.nav')

	@endsection

	@section('content')

		<div class="container">
			<div class="col-md-8" style="margin-top: 30px !important;">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">
							Section 1
							<span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
						</h3>
					</div>

					@forelse($homepage as $data)
						
						<div class="panel-body">

							<div class="col-md-12">
								<p><span class="label label-info" style="font-size: 12px;">Company Name</span></p>
								<div class="well well-sm">{{ $data->company_name }}</div>
							</div>
						
							<div class="col-md-12">
								<p><span class="label label-info" style="font-size: 12px;">Headline</span></p>
								<div class="well well-sm">{{ $data->headline }}</div>
							</div>
						
							<div class="col-md-12">
								<p><span class="label label-info" style="font-size: 12px;">Brief explanation about headline</span></p>
								<div class="well well-sm">{{ $data->headline_brief }}</div>
							</div>

						</div>

					@empty

						<div class="panel-body">

							<div class="col-md-12">
								<p><span class="label label-info" style="font-size: 12px;">Company Name</span></p>
								<div class="well well-sm">No records found</div>
							</div>
						
							<div class="col-md-12">
								<p><span class="label label-info" style="font-size: 12px;">Headline</span></p>
								<div class="well well-sm">No records found</div>
							</div>
						
							<div class="col-md-12">
								<p><span class="label label-info" style="font-size: 12px;">Brief explanation about headline</span></p>
								<div class="well well-sm">No records found</div>
							</div>

						</div>

					@endforelse

				</div>
			</div>

			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">
							Section 2
							<span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
						</h3>
					</div>

					@forelse($homepage as $data)

						<div class="panel-body">

							<div class="col-md-12">
								<p><span class="label label-info" style="font-size: 12px;">Brief explanation about services</span></p>
								<div class="well well-sm">{{ $data->services_brief }}</div>
							</div>
						
						</div>

					@empty

						<div class="panel-body">

							<div class="col-md-12">
								<p><span class="label label-info" style="font-size: 12px;">Brief explanation about services</span></p>
								<div class="well well-sm">No records found</div>
							</div>
						
						</div>

					@endforelse

				</div>
			</div>

			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">
							Section 3
							<span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
						</h3>
					</div>

					@forelse($homepage as $data)
						
						<div class="panel-body">

							<div class="col-md-12">
								<p><span class="label label-info" style="font-size: 12px;">1. Company's strength</span></p>
								<div class="well well-sm">{{ $data->service_1 }}</div>
							</div>

							<div class="col-md-12">
								<p><span class="label label-info" style="font-size: 12px;">2. Company's strength</span></p>
								<div class="well well-sm">{{ $data->service_2 }}</div>
							</div>

							<div class="col-md-12">
								<p><span class="label label-info" style="font-size: 12px;">3. Company's strength</span></p>
								<div class="well well-sm">{{ $data->service_3 }}</div>
							</div>

							<div class="col-md-12">
								<p><span class="label label-info" style="font-size: 12px;">4. Company's strength</span></p>
								<div class="well well-sm">{{ $data->service_4 }}</div>
							</div>
						
						</div>

					@empty

						<div class="panel-body">

							<div class="col-md-12">
								<p><span class="label label-info" style="font-size: 12px;">1. Company's strength</span></p>
								<div class="well well-sm">No records found</div>
							</div>

							<div class="col-md-12">
								<p><span class="label label-info" style="font-size: 12px;">2. Company's strength</span></p>
								<div class="well well-sm">No records found</div>
							</div>

							<div class="col-md-12">
								<p><span class="label label-info" style="font-size: 12px;">3. Company's strength</span></p>
								<div class="well well-sm">No records found</div>
							</div>

							<div class="col-md-12">
								<p><span class="label label-info" style="font-size: 12px;">4. Company's strength</span></p>
								<div class="well well-sm">No records found</div>
							</div>
						
						</div>

					@endforelse

				</div>
			</div>

			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">
							Section 4
							<span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
						</h3>
					</div>

					@forelse($homepage as $data)

						<div class="panel-body">

							<div class="col-md-12">
								<p><span class="label label-info" style="font-size: 12px;">Phone number</span></p>
								<div class="well well-sm">{{ $data->phone }}</div>
							</div>

							<div class="col-md-12">
								<p><span class="label label-info" style="font-size: 12px;">Email</span></p>
								<div class="well well-sm">{{ $data->email }}</div>
							</div>
						
						</div>

					@empty

						<div class="panel-body">

							<div class="col-md-12">
								<p><span class="label label-info" style="font-size: 12px;">Phone number</span></p>
								<div class="well well-sm">No records found</div>
							</div>

							<div class="col-md-12">
								<p><span class="label label-info" style="font-size: 12px;">Email</span></p>
								<div class="well well-sm">No records found</div>
							</div>
						
						</div>

					@endforelse

				</div>
			</div>
			
			@foreach($homepage as $data)

				<div class="col-md-8" style="margin-bottom: 30px !important;">
					<a href="{{ route('webadmin.homepage.edit', ['id' => $data->id]) }}" class="btn btn-success pull-right">Edit Post</a>
				</div>
			
			@endforeach


		</div>

	@endsection

	