@extends('layout')
@section('content')
<h1 class="text-center">Create a new post</h1>
<form method="POST" action={{ route('posts.store') }}>
  @csrf
  <div class="form-group">
    <label for="title">Post Title</label>
    <input name="title" required="required" type="text" class="form-control" id="title" placeholder="Enter title">
  </div>
  <div class="form-group">
    <label for="content">Post Content</label>
    <textarea name="content" required="required" class="form-control" id="content" rows="9"></textarea>
  </div>
  <button type="submit" class="btn btn-outline-success btn-block">Save</button>
</form>
@endsection