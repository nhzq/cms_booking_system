@forelse($trainings as $training)

	<tr>
		<td class="col-md-1 font-size-table">
			{{ ++$i }}
		</td>
		<td class="font-size-table">
			{{ $training->category->name }}
		</td>
		<td class="font-size-table">
			{{ $training->subcategory->name }}
		</td>
		<td class="col-md-2 font-size-table">
			{{ $training->start_date->toFormattedDateString() }}
		</td>
		<td class="col-md-1">
			<button type="button" class="btn btn-secondary" style="font-size: 10px; border-radius: 4px;">
				More info
			</button>
		</td>
	</tr>

@empty

	<tr>
		<td class="col-md-1 font-size-table">
			{{ ++$i }}
		</td>
		<td>No available training</td>
	</tr>

@endforelse