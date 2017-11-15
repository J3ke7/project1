@extends('layouts/base')

@section('title', 'Home')

@section('content')
    @foreach ($articles as $a)
    <div class="row">
    	<div class="col-md-8 col-md-offset-2">
    		<h1>{{ $a->title }}</h1>
    		<p class="lead">{{ $a->content }}</p>
    		<p><a href="{{ route('article.show', $a->id) }}">Read more</a></p>
    	</div>
    </div>
    @endforeach

    <div class="row">
    	<div class="col-md-8 col-md-offset-2 text-center">
    		{{ $articles->render() }}
    		{{ $articles->nextPageUrl() }}
    	</div>
    </div>
@endsection

