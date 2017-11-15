@extends('layouts.landing-page')

@section('content')

<section>
	<div class="container">
		<div class="row">

		        <!-- Post Content Column -->
		        <div class="col-lg-8">

		          <!-- Title -->
		          <h1 class="mt-4">{{ $post->title }}</h1>

		          <hr>

		          <!-- Date/Time -->
		          <p>Posted on {{ $post->created_at->diffForHumans() }}</p>

		          <hr>

		          <!-- Preview Image -->
		          <img class="img-fluid rounded" src="http://placehold.it/900x300" alt="">

		          <hr>

		          <!-- Post Content -->
		          <p>{!! $post->content !!}</p>

		          <hr>
		        </div>

		</div>
	</div>
</section>
@endsection