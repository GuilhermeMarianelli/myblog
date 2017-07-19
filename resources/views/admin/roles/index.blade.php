@extends('master')
@section('title',"Roles List")
@section('content')
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			@if($roles->isEmpty())
				<p class="alert alert-info">{!! session('status') !!}</p>
			@else
				<h2>Roles' List</h2>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Name</th>
						</tr>
					</thead>
					<tbody>
					@foreach($roles as $role)
						<tr>
							<td>{!! $role->name !!}</td>
						</tr>
					@endforeach	
					</tbody>
				</table>
			@endif	
		</div>
	</div>
</div>
@endsection