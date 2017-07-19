@extends('master')
@section('title','Post Page')
@section('js')
	<script id="dsq-count-scr" src="//myblog-app-1.disqus.com/count.js" async></script>
@endsection
@section('content')
<div class="container">
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2">
			<h2>{!! $post->title !!}</h2>
			<ul class="list-group">
			@foreach($selected_categories as $category)
				<li class="list-group-item">{!! $category !!}</li>
			@endforeach	
			</ul>

			<p>{!! $post->content !!}</p>
		</div>
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2">
				<div id="disqus_thread"></div>
					<script>

					/**
					*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
					*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
					/*
					var disqus_config = function () {
					this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
					this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
					};
					*/
					(function() { // DON'T EDIT BELOW THIS LINE
					var d = document, s = d.createElement('script');
					s.src = 'https://myblog-app-1.disqus.com/embed.js';
					s.setAttribute('data-timestamp', +new Date());
					(d.head || d.body).appendChild(s);
					})();
					</script>
					<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
				</div>	                            
			</div>
		</div>
	</div>
</div>
@endsection