@extends('layouts.app-master')

@section('content')

@if($message = Session::get('success'))

<div class="alert alert-success">
	{{ $message }}
</div>

@endif

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Services of propertys</b></div>
			<div class="col col-md-6">
				<a href="{{ route('properties.create') }}" class="btn btn-success btn-sm float-end">Add</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<table class="table table-dark table-striped">
			<tr>
				<th>Id</th>
				<th>Image</th>
				<th>Properties</th>
				<th>Description</th>
				<th>Category:</th>
				<th>Action</th>
			</tr>
			@if(count($data) > 0)

				@foreach($data as $row)

					<tr>
						<td>{{ $row->id }}</td>
                        <td><img src="{{ asset('images/' . $row->property_image) }}" width="75" /></td>
						<td>{{ $row->property_name }}</td>
						<td>{{ $row->property_description }}</td>
						<td>{{ $row->category->category_name }}</td>
						<td>
							<form method="post" action="{{ route('properties.destroy', $row->id) }}">
								@csrf
								@method('DELETE')
								<a href="{{ route('properties.show', $row->id) }}" class="btn btn-primary btn-sm">View</a>
								<a href="{{ route('properties.edit', $row->id) }}" class="btn btn-warning btn-sm">Edit</a>
								<input type="submit" class="btn btn-danger btn-sm" value="Delete" />
							</form>

						</td>
					</tr>

				@endforeach

			@else
				<tr>
					<td colspan="5" class="text-center">No Service</td>
				</tr>
			@endif
		</table>
		{!! $data->links() !!}
		<p>
			Displaying {{$data->count()}} of {{ $data->total() }} Properties(s).
		</p>
	</div>
</div>

@endsection
