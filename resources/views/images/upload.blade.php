@extends('layouts/app') 
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<form enctype="multipart/form-data" action="{{ route('image.handle-upload') }}" method="POST">
				<input type="hidden" value="{{ csrf_token() }}" name="_token">
			    <fieldset>
			        <div class="form-group">
			            <label for="exampleInputFile">File input</label>
			            <input class="form-control-file" aria-describedby="fileHelp" type="file" name="anh">
			            <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small><br/>
			            <input class="btn btn-primary" type="submit" value="Upload">
			        </div>
			    </fieldset>
			</form>
		</div>
	</div>
</div>

@endsection