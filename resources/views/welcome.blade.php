@extends('layout')

@section('content')
    <div class="jumbotron">
        <h1 class="display-4">Welcome to Kenya Blogger!</h1>
        <p class="lead">We write enteresting stuff about Kenyan politics.</p>
        <hr class="my-4">
        <a class="btn btn-secondary btn-lg" href={{ route('posts.index') }} role="button">Read Our Work</a>
    </div>
@endsection