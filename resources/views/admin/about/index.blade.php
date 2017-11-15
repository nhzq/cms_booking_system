@extends('layouts.app')

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

					@foreach($about as $data)
						
						<div class="panel-body">

							<div class="col-md-12">
								<p><span class="label label-info" style="font-size: 12px;">Vision</span></p>
								<div class="well well-sm">{!! $data->vision !!}</div>
							</div>
						
							<div class="col-md-12">
								<p><span class="label label-info" style="font-size: 12px;">Mission</span></p>
								<div class="well well-sm">{!! $data->mission !!}</div>
							</div>

						</div>

					@endforeach

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

					@foreach($about as $data)
						
						<div class="panel-body">

							<div class="col-md-12">
								<p><span class="label label-info" style="font-size: 12px;">Company Background</span></p>
								<div class="well well-sm">{!! $data->body !!}</div>
							</div>
						
						</div>

					@endforeach

				</div>
			</div>

			@foreach($about as $data)

				<div class="col-md-8" style="margin-bottom: 30px !important;">
					<a href="{{ route('about.edit', ['id' => $data->id]) }}" class="btn btn-success pull-right">Edit Post</a>
				</div>

			@endforeach

		</div>

	@endsection