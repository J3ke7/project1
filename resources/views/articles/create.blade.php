@extends('layouts/base') @section('title', 'Create') @section('content')

<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<h1 class="text-center">Add new article</h1>
	</div>
</div>

<div class="row">
    <div class="col-md-8 col-md-offset-2">
    	@if ($errors->any())
			<div class="alert alert-danger">
				<strong>Whoops!</strong> There were some problems with your input.<br><br>
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif
        <form class="form-horizontal" action="{{ route('article.store') }}" method="POST">

			@include('articles._from', ['button_name' => 'Create'])
        </form>
    </div>
</div>
@endsection