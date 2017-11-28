@extends('layouts.landing-page')

@section('css')
	
	<style>
		.pagination {
		  display: inline-block;
		  padding-left: 0;
		  margin: 20px 0;
		  border-radius: 4px;
		}
		.pagination > li {
		  display: inline;
		}
		.pagination > li > a,
		.pagination > li > span {
		  position: relative;
		  float: left;
		  padding: 6px 12px;
		  margin-left: -1px;
		  line-height: 1.42857143;
		  color: #337ab7;
		  text-decoration: none;
		  background-color: #fff;
		  border: 1px solid #ddd;
		}
		.pagination > li:first-child > a,
		.pagination > li:first-child > span {
		  margin-left: 0;
		  border-top-left-radius: 4px;
		  border-bottom-left-radius: 4px;
		}
		.pagination > li:last-child > a,
		.pagination > li:last-child > span {
		  border-top-right-radius: 4px;
		  border-bottom-right-radius: 4px;
		}
		.pagination > li > a:hover,
		.pagination > li > span:hover,
		.pagination > li > a:focus,
		.pagination > li > span:focus {
		  z-index: 2;
		  color: #23527c;
		  background-color: #eee;
		  border-color: #ddd;
		}
		.pagination > .active > a,
		.pagination > .active > span,
		.pagination > .active > a:hover,
		.pagination > .active > span:hover,
		.pagination > .active > a:focus,
		.pagination > .active > span:focus {
		  z-index: 3;
		  color: #fff;
		  cursor: default;
		  background-color: #337ab7;
		  border-color: #337ab7;
		}
		.pagination > .disabled > span,
		.pagination > .disabled > span:hover,
		.pagination > .disabled > span:focus,
		.pagination > .disabled > a,
		.pagination > .disabled > a:hover,
		.pagination > .disabled > a:focus {
		  color: #777;
		  cursor: not-allowed;
		  background-color: #fff;
		  border-color: #ddd;
		}
	</style>

@endsection

@section('content')
	
	<section>
		<div class="container">
			<div class="row">
	            <div class="col-lg-12 text-center">
	                <h2 class="section-heading">News &amp Media</h2>
	                <hr class="my-4">
	                <br>
	            </div>
	        </div>

	        @forelse($news as $post)

				<div class="row">
					<div class="col-md-8">
						<!-- Blog Post -->
						<div class="card mb-4">

							@if(count($post->image) > 0)

								<img class="card-img-top" src="{{ asset($post->image) }}" style="max-width:750px;">

							@endif

							<div class="card-body">
								<h2 class="card-title">{{ $post->title }}</h2>
								<p class="card-text">{!! str_limit($post->content, 300) !!}</p>
								<a href="{{ route('frontend.news-post', ['slug' => $post->slug]) }}" class="btn btn-primary" style="font-size: 12px;">Read More &rarr;</a>
							</div>
							<div class="card-footer text-muted">
								Posted on {{ $post->created_at->toFormattedDateString() }}
							</div>
						</div>
					</div>
				</div>

			@empty

				<div class="row">
					<div class="col-md-8">
						<!-- Blog Post -->
						<div class="card mb-4">

							<div class="card-body">
								<h2 class="card-title">No records found</h2>
								<p class="card-text">No records found</p>
							</div>

						</div>
					</div>
				</div>

			@endforelse

		</div>
	</section>

@endsection