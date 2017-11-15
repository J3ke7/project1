<input type="hidden" name="_token" value="{{ csrf_token() }}">
<fieldset>
    <div class="form-group">
        <label for="title" class="col-lg-2 control-label">Title</label>
        <div class="col-lg-10">
            <input type="text" class="form-control" name="title" id="title" placeholder="Title" required >
        </div>
    </div>
    <div class="form-group">
        <label for="content" class="col-lg-2 control-label">Content</label>
        <div class="col-lg-10">
            <textarea class="form-control" rows="13" name="content" id="content" placeholder="Content" required></textarea>
        </div>
    </div>
    <div class="form-group">
        <div class="col-lg-10 col-lg-offset-2">
            <button type="submit" class="btn btn-primary">{{ $button_name }}</button>
        </div>
    </div>
</fieldset>
