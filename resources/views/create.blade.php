@extends('layout')
@section('container')    
<form action="/posts" method="POST">
    @csrf
    <div class="form-group">
        <label for="title_input">Title</label>
        <input type="text" name="title_input" class="form-control" id="title_input">
    </div>
    <div class="form-group">
        <label for="body">Description</label>
        <textarea type="text" name="desc_body" class="form-control" id="desc_body">{{ old('desc_body') }}</textarea>
    </div>
    <button class="btn btn-primary" type="submit">Create</button>
</form>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
<script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>

<script>
      // Initialise editors
  var bodyEditor = new SimpleMDE({ element: document.getElementById("desc_body") });
</script>
@endsection
