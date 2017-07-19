@extends('master')
@section('title','Create a new role')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2">
			<form class="form-horizontal" method="post">
				<fieldset>
					<legend>Create a new role</legend>
					{{ csrf_field() }}
					@foreach($errors->all() as $error)
						<p class="alert alert-danger">{!! $error !!}</p>
					@endforeach
					@if(session('status'))
						<div class="alert alert-info">{!! session('status') !!}</div>
					@endif
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" name="name" class="form-control" placeholder="" value="{!! old('name') !!}">
					</div>
					<div class="form-group">
						<button type="reset" class="btn btn-danger">Cancel</button>
						<button type="submit" class="btn btn-primary">Create</button>
					</div>
				</fieldset>
			</form>
		</div>
	</div>
</div>
@endsection