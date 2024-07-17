@extends('layouts.app-master')

@section('content')

<div class="card">
    <div class="row mb-4">
        <label class="col-sm-2 col-label-form"><b>Image</b></label>
        <div class="col-sm-10">
            <img src="{{ asset('images/' .  $property->property_image) }}" width="200" class="img-thumbnail" />
        </div>
    </div>
    <div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Property name</b></div>
			<div class="col col-md-6">
				<a href="{{ route('properties.index') }}" class="btn btn-primary btn-sm float-end">See list all</a>
			</div>
		</div>
	</div>

	<div class="card-body">
        <div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Description of property</b></label>
			<div class="col-sm-10">
				{{ $property->property_description}}
			</div>
		</div>


		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>Category</b></label>
			<div class="col-sm-10">
				{{ $property->category->category_name }}
			</div>
		</div>

	</div>
</div>

@endsection('content')
