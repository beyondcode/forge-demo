<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="col-md-4 control-label">{{ 'Title' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="title" type="text" id="title" value="{{ $post->title or ''}}" >
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('content') ? 'has-error' : ''}}">
    <label for="content" class="col-md-4 control-label">{{ 'Content' }}</label>
    <div class="col-md-6">
        <textarea class="form-control" rows="5" name="content" type="textarea" id="content" >{{ $post->content or ''}}</textarea>
        {!! $errors->first('content', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('category') ? 'has-error' : ''}}">
    <label for="category" class="col-md-4 control-label">{{ 'Category' }}</label>
    <div class="col-md-6">
        <select name="category" class="form-control" id="category" >
    @foreach (json_decode('{"technology": "Technology", "tips": "Tips", "health": "Health"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($post->category) && $post->category == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
        {!! $errors->first('category', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
