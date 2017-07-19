@extends('master')
@section('title',"Categories' List")
@section('content')
<div class="container">
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2">
		<h2>Categories' List</h2>
		<hr>
		@if(session('status'))
			<p class="alert alert-info">{!! session('status') !!}</p>
		@endif
		@if($categories->isEmpty())
			<p class="alert alert-info">There is no category created yet!</p>
		@else
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Name</th>
						<th>Created at</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
				@foreach($categories as $category)
					<tr>
						<td>{!! $category->name !!}</td>
						<td>{!! $category->created_at !!}</td>
						<td>
							<form method="post" action="{!! action('Admin\CategoriesController@destroy',$category->id) !!}">
								{{ csrf_field() }}
								<button type="submit" class="btn btn-danger" onclick="return confirm('Do you really wish deleting this category?')">Delete</button>
							</form>
						</td>
					</tr>
				@endforeach	
				</tbody>
			</table>
		@endif	
		</div>
	</div>
</div>
@endsection