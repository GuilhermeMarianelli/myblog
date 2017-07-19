@extends('master')
@section('title','Home Page')
@section('content')
<div clas="container">
	@foreach($posts as $post)
	<div class="row">
		<div class="col-lg-10 col-lg-offset-1">
			<h2>{!! $post->title !!}</h2>
			<p>{!! mb_substr($post->content,0,500) !!}</p>
			<a href="{!! action('BlogController@show',$post->slug) !!}" class="btn btn-info">Read more</a>
		</div>
	</div>
	@endforeach
</div>
@endsection