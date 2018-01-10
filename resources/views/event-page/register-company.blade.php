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

			.has-error .help-block,
			.has-error .control-label,
			.has-error .radio,
			.has-error .checkbox,
			.has-error .radio-inline,
			.has-error .checkbox-inline,
			.has-error.radio label,
			.has-error.checkbox label,
			.has-error.radio-inline label,
			.has-error.checkbox-inline label {
			  color: #a94442;
			}
			.has-error .form-control {
			  border-color: #a94442;
			  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
			          box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
			}
			.has-error .form-control:focus {
			  border-color: #843534;
			  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #ce8483;
			          box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #ce8483;
			}
			.has-error .input-group-addon {
			  color: #a94442;
			  background-color: #f2dede;
			  border-color: #a94442;
			}
			.has-error .form-control-feedback {
			  color: #a94442;
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
								<a class="nav-link active" href="#">
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
								<a class="nav-link disabled" href="#">
									<h5 class="list-group-item-heading">Step 3</h5>
	                    			<p class="list-group-item-text">Confirmation</p>
                    			</a>
							</li>
						</ul>
					</div>
				</div>

				<br>
				<br>
				
				<div class="row">
					<div class="col-md-10 offset-1">

						<form action="{{ route('event.register.store.company', ['id' => $training->id]) }}" method="post">
							{{ csrf_field() }}
										
							<div class="card">
								<div class="card-header">
									Company Information
								</div>

								<div class="card-body">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
							                    <label class="control-label">Name</label>
							                    <input  maxlength="100" name="name" type="text" class="form-control" placeholder="Enter company's name"  value="{{ old('name') }}"/>

							                    @if($errors->has('name'))

									    			<div class="text-danger">
														Please enter company's name before save
													</div>

												@endif

							                </div>

							                <div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
							                    <label class="control-label">Address</label>
							                    <input maxlength="100" name="address" type="text" class="form-control" placeholder="Enter company's address" / value="{{ old('address') }}">

							                    @if($errors->has('address'))

									    			<div class="text-danger">
														Please enter company's address before save
													</div>

												@endif

							                </div>

							                <div class="form-group {{ $errors->has('reg_no') ? 'has-error' : '' }}">
							                    <label class="control-label">Registration Number</label>
							                    <input maxlength="100" name="reg_no" type="text" class="form-control" placeholder="Enter company's registration number" value="{{ old('reg_no') }}"/>

							                    @if($errors->has('reg_no'))

									    			<div class="text-danger">
														Please enter company's registration number before save
													</div>

												@endif

							                </div>
											
											<div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
							                    <label class="control-label">Phone Number</label>
							                    <input maxlength="100" name="phone" type="text" class="form-control" placeholder="Enter company's phonenumber" value="{{ old('phone') }}"/>

							                     @if($errors->has('phone'))

									    			<div class="text-danger">
														Please enter phone number before save
													</div>

												@endif

							                </div>

							                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
							                    <label class="control-label">Email</label>
							                    <input maxlength="100" name="email" type="text" class="form-control" placeholder="Enter company's email" value="{{ old('email') }}"/>

							                    @if($errors->has('email'))

									    			<div class="text-danger">
														Please enter email before save
													</div>

												@endif

							                </div>

							                <div class="form-group ">
							                    <label class="control-label">Website</label>
							                    <input maxlength="100" name="website" type="text" class="form-control" placeholder="Enter company's website" value="{{ old('website') }}"/>
							                </div>

						                </div>

						                <div class="col-md-6">
											<div class="form-group {{ $errors->has('person') ? 'has-error' : '' }}">
							                    <label class="control-label">Person In Charge</label>
							                    <input maxlength="100" name="person" type="text" class="form-control" placeholder="Enter name" value="{{ old('person') }}"/>

							                    @if($errors->has('person'))

									    			<div class="text-danger">
														Please enter the name of person in charge before save
													</div>

												@endif

							                </div>

							                <div class="form-group {{ $errors->has('position') ? 'has-error' : '' }}">
							                    <label class="control-label">Position</label>
							                    <input maxlength="100" name="position" type="text" class="form-control" placeholder="Enter position" value="{{ old('position') }}"/>

							                    @if($errors->has('position'))

									    			<div class="text-danger">
														Please enter the position before save
													</div>

												@endif

							                </div>
							                
						                </div>
					                </div>
								</div>
							</div>

							<br>
							<br>
							
							<div class="" style="margin-top: 30px !important;">
								<button class="btn btn-success btn-style pull-right" type="submit">
									Save
								</button>
							</div>

						</form>
						
					</div>
				</div>
			</div>
			
		</section>

	@endsection