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
											<div class="form-group">
							                    <label class="control-label">Name</label>
							                    <input  maxlength="100" name="name" type="text" class="form-control" placeholder="Enter company's name"  />
							                </div>

							                <div class="form-group">
							                    <label class="control-label">Address</label>
							                    <input maxlength="100" name="address" type="text" class="form-control" placeholder="Enter company's address" />
							                </div>

							                <div class="form-group">
							                    <label class="control-label">Registration Number</label>
							                    <input maxlength="100" name="reg_no" type="text" class="form-control" placeholder="Enter company's registration number" />
							                </div>
											
											<div class="form-group">
							                    <label class="control-label">Phone Number</label>
							                    <input maxlength="100" name="phone" type="text" class="form-control" placeholder="Enter company's phonenumber" />
							                </div>

							                <div class="form-group">
							                    <label class="control-label">Email</label>
							                    <input maxlength="100" name="email" type="text" class="form-control" placeholder="Enter company's email" />
							                </div>

							                <div class="form-group">
							                    <label class="control-label">Website</label>
							                    <input maxlength="100" name="website" type="text" class="form-control" placeholder="Enter company's website" />
							                </div>

						                </div>

						                <div class="col-md-6">
											<div class="form-group">
							                    <label class="control-label">Person In Charge</label>
							                    <input maxlength="100" name="person" type="text" class="form-control" placeholder="Enter name" />
							                </div>

							                <div class="form-group">
							                    <label class="control-label">Position</label>
							                    <input maxlength="100" name="position" type="text" class="form-control" placeholder="Enter position" />
							                </div>
							                
						                </div>
					                </div>
								</div>
							</div>

							<br>
							<br>
							
							<div class="" style="margin-top: 30px !important;">
								<button class="btn btn-success btn-style pull-right" type="submit">
									Submit
								</button>
							</div>

						</form>
						
					</div>
				</div>
			</div>
			
		</section>

	@endsection