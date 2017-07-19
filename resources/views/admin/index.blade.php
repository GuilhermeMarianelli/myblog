@extends('master')
@section('title','Admin Control Painel')
@section('style')
	<link rel="stylesheet" type="text/css" href="{!! asset('css/style.css') !!}">
@endsection
@section('content')
<div class="container">
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2">
			<div class="row">
				<div class="col-lg-2">
					<span class="glyphicon glyphicon-user"></span>
				</div>
				<div class="col-lg-4">
					<h3>Manager Users</h3>
					<a href="{!! asset('admin/users') !!}" class="btn btn-default">All Users</a>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-2">
					<span class="glyphicon glyphicon-list-alt"></span>
				</div>
				<div class="col-lg-4">
					<h3>Manager Roles</h3>
					<a href="{!! asset('admin/roles') !!}" class="btn btn-default">All Roles</a>
					<a href="{!! asset('admin/roles/create') !!}" class="btn btn-primary">Create Role</a>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-2">
					<span class="glyphicon glyphicon-file"></span>
				</div>
				<div class="col-lg-4">
					<h3>Manager Posts</h3>
					<a href="{!! asset('admin/posts') !!}" class="btn btn-default">All Posts</a>
					<a href="{!! asset('admin/posts/create') !!}" class="btn btn-primary">Create Post</a>
				</div>
			</div>
		</div>	
	</div>
</div>
@endsection