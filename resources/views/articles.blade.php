@extends('test')

@section('content')

<div id="page">
	<div class="container">
		<ul class="style1">
		@foreach ($articles as $article)
			<li class="first">
				<h3><a href="/articles/{{ $article->id }}">{{ $article->title }}</a></h3>
					<p>{{ $article->excerpt }}</p>
					<p><img src="/images/banner.jpg" alt="" class="image image-full" /> </p>
					<p>{{ $article->body }}</p>		
				</li>
				@endforeach
		 	</ul>
	</div>
</div>

@endsection