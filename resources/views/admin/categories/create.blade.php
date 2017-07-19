@extends('master')
@section('title','Create Category Page')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2">
			<form class="form-horizontal" method="post">
				<fieldset>
				@foreach($errors->all() as $error)
					<p class="alert alert-danger">{!! $error !!}</p>
				@endforeach
				@if(session('status'))
					<div class="alert alert-info">{!! session('status') !!}</div>
				@endif
				{{ csrf_field() }}
					<legend>Create a new category</legend>
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" name="name" class="form-control" placeholder="Name">
					</div>
					<div class="form-group">
						<button class="btn btn-danger" type="reset">Cancel</button>
						<button class="btn btn-primary" type="submit">Create</button>
					</div>
				</fieldset>
			</form>
		</div>
	</div>
</div>
@endsection