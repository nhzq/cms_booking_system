@if($categories->count() > 0)

	@foreach($categories as $category)
		
		<li class="list-group-item">
            <a href="{{ route('event.category', ['id' => $category->id, 'slug' => $category->slug]) }}">{{ $category->name}}</a>
        </li>

    @endforeach

@else
	
	<li class="list-group-item">
        No records found
    </li>

@endif