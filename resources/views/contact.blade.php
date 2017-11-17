@extends('layouts.landing-page')

@section('content')
	
	<section>
		<div class="container">
			<div class="col-lg-12 text-center">
                <h2 class="section-heading">Contact Us</h2>
            <hr class="my-4">
        	</div>

        	<form action="{{ route('frontend.contact.send') }}" method="post">
			
				{{ csrf_field() }}
				<div class="col-md-6 offset-3">

					<div class="form-group">
						<label for="sender_name">Name</label>
						<input type="text" name="sender_name" class="form-control">
					</div>
					<div class="form-group">
						<label for="sender_email">Email</label>
						<input type="text" name="sender_email" class="form-control">
					</div>
					<div class="form-group">
						<label for="sender_message">Message</label>
						<textarea name="sender_message" class="form-control" cols="3" rows="3"></textarea>
					</div>

					<button class="btn btn-primary" type="submit" style="padding: 5px 15px;">
						Send
					</button>

				</div>

			</form>
		</div>
	</section>

@endsection