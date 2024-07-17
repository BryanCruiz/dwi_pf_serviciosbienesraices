@extends('layouts.app-master')

@section('content')

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Details of category</b></div>
			<div class="col col-md-6">
				<a href="{{ route('categories.index') }}" class="btn btn-primary btn-sm float-end">See list</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Category</b></label>
			<div class="col-sm-10">
				{{ $category->category_name }}
			</div>
		</div>

	
	</div>
</div>

@endsection('content')
