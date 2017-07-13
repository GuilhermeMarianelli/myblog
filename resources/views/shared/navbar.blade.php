<nav  class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="{!! asset('/') !!}">MyBlog</a>
		</div>
		<ul class="nav navbar-nav">
			<li><a href="">About</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
		@if(Auth::check())
			<li><a href="{!! asset('/users/logout') !!}"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
		@else
			<li><a href="{!! asset('/users/register') !!}"><span class="glyphicon glyphicon-user"></span> Register</a></li>
			<li><a href="{!! asset('users/login') !!}"><span class="glyphicon glyphicon-log-in"></span> Log In</a></li>
		@endif	
		</ul>
	</div>
</nav>