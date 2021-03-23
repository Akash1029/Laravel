@extends('test')

@section('content')

<div id="page">
	<div class="container">
		<ul class="style1">
		@forelse ($articles as $article)
			<li class="first">
				<h3><a href="{{ $article->path() }}">{{ $article->title }}</a></h3>
				<p>{{ $article->excerpt }}</p>
				<p><img src="/images/banner.jpg" alt="" class="image image-full" /> </p>
				<p>{{ $article->body }}</p>		
			</li>

				@empty
				<p>No Relevent article yet.</p>
				@endforelse
	</ul>
	</div>
</div>

@endsection