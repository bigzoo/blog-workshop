@extends('layout')
@section('content')
    <h1 class="text-center">{{ $post->title }}</h1>
    <div class="card">
        <div class="card-body text-justify">
            <p>{{ $post->content }}</p>
        </div>
    </div>
    <div class="text-center">
        <div class="btn-group mt-3" role="group" aria-label="Basic example">
            <a class="btn btn-danger" href={{ route('posts.delete', ['id' => $post->id]) }}>Delete this post</a>
            <a class="btn btn-dark" href={{ route('posts.edit', ['id'=>$post->id]) }}>Edit this post</a>
        </div>
    </div>

@endsection