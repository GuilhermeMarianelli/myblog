@extends('master')
@section('title','Edit User')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2">
			<form class="form-horizontal" method="post">
				<fieldset>
					<legend>Edit users</legend>
					@foreach($errors->all() as $error)
						<p class="alert alert-danger">{!! $error !!}</p>
					@endforeach
					@if(session('status'))
						<div class="alert alert-info">{!! session('status') !!}</div>
					@endif
					{{ csrf_field() }}
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" name="name" class="form-control" placeholder="Name" value="{!! $user->name !!}">
					</div>
					<div class="form-group">
						<label for="name">E-mail</label>
						<input type="email" name="email" class="form-control" placeholder="E-mail" value="{!! $user->email !!}">
					</div>
					<div class="form-group">
						<label for="role">Role</label>
						<select name="role[]" class="form-control" multiple>
						@foreach($roles as $role)
							<option value="{!! $role->name !!}" @if(in_array($role->name,$selectedRoles)) selected="selected" @endif>
								{!! $role->name !!}
							</option>
						@endforeach
						</select>
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" name="password" class="form-control" placeholder="Passsword">
					</div>
					<div class="form-group">
						<label for="password_confirmation">Password Confirmation</label>
						<input type="password_confirmation" name="password_confirmation" class="form-control" placeholder="Password Confirmation">
					</div>
					<div class="form-group">
						<button type="reset" class="btn btn-danger">Cancel</button>
						<button type="submit" class="btn btn-primary">Edit</button>
					</div>
				</fieldset>
			</form>
		</div>
	</div>
</div>
@endsection