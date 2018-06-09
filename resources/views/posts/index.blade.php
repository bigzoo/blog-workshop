@extends('layout')


@section('content')
    <h1>List of posts</h1>

<ul class="list-group">
@foreach ($posts as $post)
<li class="list-group-item"><a href={{ route('posts.show', ['id'=>$post->id]) }}>{{ $post->title }}</a></li>
@endforeach
</ul>

<a class="btn btn-success btn-link" href={{ route('posts.create') }}>Create a new post</a>
@endsection

