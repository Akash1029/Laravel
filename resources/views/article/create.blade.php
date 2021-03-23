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
			    <input type="text" class="form-control @error('title') border-danger @enderror" name="title" id="title" placeholder="Title" value="{{ old('title') }}">
			    @error('title')
			    <p class="text-danger">{{ $errors->first('title') }}</p>
			    @enderror
			</div>
			  <div class="form-group">
			    <label class="input-group" for="excerpt">Excerpt</label>
			    <textarea class="textarea form-control @error('excerpt') border-danger @enderror" name="excerpt">{{ old('excerpt') }}</textarea>
			    @error('excerpt')
			    <p class="text-danger">{{ $errors->first('excerpt') }}</p>
			    @enderror
			  </div>
			  <div class="form-group">
			    <label class="input-group" for="body">Body</label>
			    <textarea class="textarea form-control @error('body') border-danger @enderror" name="body">{{ old('body') }}</textarea>
			    @error('body')
			    <p class="text-danger">{{ $errors->first('body') }}</p>
			    @enderror
			  </div>
			  <div class="form-group">
			    <label class="input-group" for="tag">Tag</label>
			    <select for= "tag" name="tags[]" class="form-control" multiple >			    	
			    @foreach($tags as $tag)
			   		<option value="{{$tag->id}}">{{ $tag->name }}</option>
			    @endforeach
			    </select>
			    @error('tags')
			    <p class="text-danger">{{ $message }}</p>
			    @enderror
			  </div>
			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>
	</div>
</div>
@endsection