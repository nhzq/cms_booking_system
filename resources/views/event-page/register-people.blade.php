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
								<a class="nav-link active" href="#">
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

				<div class="col-md-10 offset-1">

					<h3>Registration Form</h3>

					<form action="{{ route('event.register.store.people', ['id' => $event->id]) }}" method="post">
						{{ csrf_field() }}
						
						<div class="row">
							<div class="col-md-6">
								<div class="card">
									<div class="card-header">
										Participants
									</div>

									<div class="card-body">
										<div class="row">
											<div class="col-md-12">
												
												<p>Add Participants' Name</p>
				
												<div class="form-group">
													<div class="input-group">
														<input type="text" class="form-control" id="taskName" placeholder="Participant's name">
														<span class="input-group-btn">
															<button id="submitTodo" type="submit" class="btn btn-primary" style="border-radius: 0;"><i class="fa fa-plus" aria-hidden="true"></i></button>
														</span>
													</div>
												</div>
												<br>

												<p>List</p>

												<table class="table table-striped table-responsive">
													<thead>
														<tr>
															<th class="col-md-10">Name</th>
															<th class="col-md-1">Remove</th>
														</tr>
													</thead>
													<tbody id='todoTable'>
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

	@section('script')
		<script>
			
			var $list = $('#todoTable');

			var newTodo = function(event){

				event.preventDefault();

				var taskName = $('#taskName').val();

				if(taskName){

					$list.append('<tr class=""> \
				                <td><input type="hidden" class="count" name="name[]" value="' + taskName + '">' + taskName + '</td> \
				                <td><button class="btn btn-primary  deleteTodo"><i class="fa fa-times" aria-hidden="true"></i></button></td> \
				              </tr>'
				            );

					$('.deleteTodo').on('click', deleteTodo);

				}

				$('#taskName').val('');
			}

			var deleteTodo = function(event){
				$(event.target).closest('tr').remove();
			}


			$('#submitTodo').on('click', newTodo)
			$('.deleteTodo').on('click', deleteTodo)

			
		</script>
	@endsection