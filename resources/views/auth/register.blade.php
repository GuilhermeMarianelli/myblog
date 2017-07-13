@extends('master')
@section('title','Register Page');
@section('content')
<div class="container">
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2">
			<form class="form-horizontal" method="post">
				<fieldset>
					<legend>Register User</legend>
					@foreach($errors->all() as $error)
						<p class="alert alert-danger">{{ $error }}</p>
					@endforeach
					{{ csrf_field() }}
						<div>
							<div class="form-group">
								<label for="name">Name</label>
								<input type="text" class="form-control" name="name" id="name" placeholder="Name" value="{{ old('name') }}">
							</div>
						</div>
						<div>
							<div class="form-group">
								<label form="email">E-mail</label>
								<input type="email" class="form-control" name="email" placeholder="E-mail" value="{!! old('email') !!}">
							</div>
						</div>
						<div>
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" class="form-control" name="password" placeholder="Password" value="{!! old('password') !!}">
							</div>
						</div>
						<div>
							<div class="form-group">
								<label for="password_confirmation">Confirm Password</label>
								<input type="password" class="form-control" name="password_confirmation" placeholder="Confirm your password" value="{!! old('password_confirmation') !!}">
							</div>
						</div>
						<div class="form-group">
							<button type="reset" class="btn btn-danger">Cancel</button>
							<button type="submit" class="btn btn-primary">Register</button>
						</div>
				</fieldset>
			</form>
		</div>
	</div>
</div>
@endsection