@extends('master')
@section('title','Login Page')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2">
			<form class="form-horizontal" method="post">
				<fieldset>
					<legend>Log in</legend>
					@foreach($errors->all() as $error)
						<p class="alert alert-danger">{{ $error }}</p>
					@endforeach
					{{ csrf_field() }}
					<div class="form-group">
						<label for="email">E-mail</label>
						<input type="email" class="form-control" name="email" placeholder="E-mail" value="{{ old('email') }}">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" name="password" placeholder="password">
					</div>
					<div class="form-group">
						<label>
							<input type="checkbox" name="remember"> Remember me?
						</label>	
					</div>
					<div class="form-group">
						<button class="btn btn-danger" type="reset">Cancel</button>
						<button class="btn btn-primary" type="submit">Login</button>
					</div>
				</fieldset>
			</form>
		</div>
	</div>
</div>
@endsection