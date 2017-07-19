@extends('master')
@section('title',"Users List")
@section('content')
<div class="container">
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2">
			<h2>Users' List</h2>
			@if(session('status'))
				<div class="alert alert-success">{!! session('status') !!}</div>
			@endif
			@if($users->isEmpty())
				<p class="alert alert-info">There is no user registered yet.</p>
			@else
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Name</th>
							<th>aE-mail</th>
						</tr>
					</thead>
					<tbody>
					@foreach($users as $user)
						<tr>
							<td>{!! $user->name !!}</td>
							<td><a href="{!! asset(action('Admin\UsersController@edit',$user->id)) !!}">{!! $user->email !!}</a></td>
						</tr>
					@endforeach	
					</tbody>
				</table>
			@endif
		</div>
	</div>
</div>
@endsection