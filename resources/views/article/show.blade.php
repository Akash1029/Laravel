@extends('layouts.app')

@section('content')
<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
			<div class="title">
				<h2>{{ $article->title }}</h2>
				<span class="byline">{{ $article->excerpt }}</span>
				<p>{{ $article->author->name }}</p>
			</div>
			<p><img src="/images/banner.jpg" alt="" class="image image-full" /> </p>
			{{ $article->body }}

			<p>
				@foreach($article->tags as $tag)
				<a href="{{ route('article.index', ['tag' =>$tag->name]) }}">{{ $tag->name }}</a>
				@endforeach
			</p>

			@include('article.replies')
		</div>
	</div>
</div>
@endsection