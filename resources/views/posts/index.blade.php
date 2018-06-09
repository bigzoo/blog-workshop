@extends('layout')

@section('content')
    <h1 class="text-center">List of posts</h1>
    <ul class="list-group">
        @foreach ($posts as $post)
            <li class="list-group-item text-capitalize"><a href={{ route('posts.show', ['id'=>$post->id]) }}>{{ $post->title }}</a></li>
        @endforeach
    </ul>


    <a class="btn btn-outline-secondary btn-block mt-3" href={{ route('posts.create') }}>Create a new post</a>
@endsection

