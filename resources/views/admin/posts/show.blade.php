@extends('master')
@section('title','Show Post')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<h2>{!! $post->title !!}</h2>
			<ul class="list-group">
			@foreach($categories as $category)
				<li class="list-group-item">{!! $category !!}</li>
			@endforeach
			</ul>
			<p><strong>Author:</strong> {!! $user_name !!}</p>
			<hr>
			<p>{!! $post->content !!}</p>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-2">
			<form method="post" action="{!! action('Admin\PostsController@destroy',$post->id) !!}">
				<button class="btn btn-danger" type="submit">Delete</button>
			</form>
		</div>
		<div class="col-lg-2">
			<a href="{!! action('Admin\PostsController@edit',$post->id) !!}" class="btn btn-primary">Edit</a>
		</div>
	</div>
</div>
@endsection