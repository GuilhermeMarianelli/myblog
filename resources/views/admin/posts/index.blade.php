@extends('master')
@section('title',"Posts' List")
@section('content')
<div class="container">
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2">
		<h2>Posts' List</h2>
		<hr>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Title</th>
					<th>Created at</th>
				</tr>
			</thead>
			<tbody>
			@foreach($posts as $post)
				<tr>
					<td><a href="{!! action('Admin\PostsController@show',$post->id) !!}">{!! $post->title !!}</a></td>
					<td>{!! $post->created_at !!}</td>
				</tr>
			@endforeach	
			</tbody>
		</table>	
		</div>
	</div>
</div>
@endsection