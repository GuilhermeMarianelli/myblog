@extends('master')
@section('title','Edit Post Page')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2">
			<form class="form-horizontal" method="post">
				<fieldset>
					<legend>Edit Post</legend>
					{{ csrf_field() }}
					@foreach($errors->all() as $error)
						<p class="alert alert-danger">{!! $error !!}</p>
					@endforeach
					@if(session('status'))
						<div class="alert alert-info">
							{!! session('status') !!}
						</div>
					@endif
					<div class="form-group">
						<label for="title">Title</label>
						<input type="text" name="title" class="form-control" value="{!! $post->title !!}">
					</div>
					<div class="form-group">
						<label for="content">Content</label>
						<textarea class="form-control" rows="3" name="content">{!! $post->content !!}</textarea>
					</div>
					<div class="form-group">
						<label for="">Category</label>
						<select name="category[]" multiple class="form-control">
						@foreach($categories as $category)
							<option value="{!! $category->id !!}" @if(in_array($category->name,$selected_category)) selected='selected' @endif>{!! $category->name !!}</option>
						@endforeach
						</select>
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