@extends('layouts/base')

@section('title', 'Article')

@section('content')
	
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<a href="{{ route('articles.index') }}" class="btn btn-link"><span class="glyphicon glyphicon-chevron-left"></span> Back to home</a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
    		<h1>{{ $article->title }}</h1>
    		<p class="lead">{{ $article->content }}</p>	
    		<a href="{{ route('articles.edit', $article->id) }}" class="btn btn-info">Update</a>
    	</div>
	</div>

@endsection
