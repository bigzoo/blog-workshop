@extends('layout')

@section('content')
    <h1>Editing post: {{ $post->id }}</h1>
    <form method="POST" action={{ route('posts.update', ['id' => $post->id]) }}>
        <input type="hidden" name="_method" value="PUT">
        @csrf
        <div class="form-group">
            <label for="title">Post Title</label>
            <input value={{ $post->title }} name="title" required="required" type="text" class="form-control" id="title"
                   placeholder="Enter title">
        </div>
        <div class="form-group">
            <label for="content">Post Content</label>
            <textarea name="content" required="required" class="form-control" id="content"
                      rows="9">{{ $post->content }}</textarea>
        </div>
        <button type="submit" class="btn btn-outline-success btn-block">Update</button>
    </form>
@endsection