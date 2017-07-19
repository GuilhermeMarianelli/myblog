@extends('master')
@section('title','Create Post Page')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2">
			<form class="form-horizontal" method="post">
				<fieldset>
					<legend>Create new post</legend>
					{{ csrf_field() }}
					@foreach($errors->all() as $error)
						<p class="alert alert-danger">{!! $error !!}</p>
					@endforeach
					@if(session('status'))
						<div class="alert alert-info">{!! session('status') !!}</div>
					@endif
					<div class="form-group">
						<label for="title">Title</label>
						<input type="text" name="title" class="form-control" placeholder="Title">
					</div>
					<div class="form-group">
						<label for="content">Content</label>
						<textarea class="form-control" rows='3' name="content"></textarea>
					</div>
					<div class="form-group">
						<label for="category">Category</label>
						<select name="category[]" multiple class="form-control">
						@foreach($categories as $category)
							<option value="{!! $category->id !!}">{!! $category->name !!}</option>
						@endforeach	
						</select>
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