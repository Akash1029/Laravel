@extends('test')
@section('head')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
@endsection

@section('content')
<div class="wrapper mt-5">
	<div class="container">
		<h1 class="heading font-weight-bold">New Article</h1>
		<form method="POST" action="/articles">
			@csrf
			<div class="form-group">
			    <label for="title">Title</label>
			    <input type="text" class="form-control" name="title" id="title" placeholder="Title">
			</div>
			  <div class="form-group">
			    <label class="input-group" for="excerpt">Excerpt</label>
			    <textarea class="textarea form-control" name="excerpt"></textarea>
			  </div>
			  <div class="form-group">
			    <label class="input-group" for="excerpt">Body</label>
			    <textarea class="textarea form-control" name="body"></textarea>
			  </div>
			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>
	</div>
</div>
@endsection