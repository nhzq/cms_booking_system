@extends('layouts.landing-page')

@section('content')

<section>
	<div class="container">
		<div class="row">

		        <!-- Post Content Column -->
		        <div class="col-lg-8">

					<!-- Title -->
					<h1 class="mt-4">{{ $post->title }}</h1>

					<!-- Date/Time -->
					<p class="text-muted">Posted on {{ $post->created_at->toFormattedDateString() }}</p>

					<!-- Preview Image -->
					{{-- <img class="img-fluid rounded" src="http://placehold.it/900x300" alt=""> --}}
					@if(count($post->image) > 0)
						<br>
						<br>
						<img class="img-fluid rounded" src="{{ asset($post->image) }}" style="max-width: 730px;">

					@endif

					<!-- Post Content -->
					<br>
					<br>
					<p>{!! $post->content !!}</p>

		        </div>

		</div>
	</div>
</section>
@endsection