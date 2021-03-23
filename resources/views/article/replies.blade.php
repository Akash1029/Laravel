	@foreach($article->replies as $reply)
		<div class="reply-inner">
			<header class="d-flex justify-content-between">
			<p class="d-flex justify-content-between">{{ $reply->author->name }} said...</p>
			
			@if($reply->isBest())
				<span class="alert-success p-2">Best Reply!!</span>
			@endif
			</header>

			{{ $reply->body}}
		</div>
		@can('update', $article)
		<form method="POST" action="/best-reply/{{ $reply->id }}">
			@csrf
			<button type="submit" class="btn p-0">Best reply ?</button>
		</form>
		@endcan
		@continue($loop->last)
		<hr>
	@endforeach
