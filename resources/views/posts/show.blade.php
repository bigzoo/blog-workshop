<h1>{{ $post->title }}</h1>

<p>{{ $post->content }}</p>

<a href={{ route('posts.index') }}>Go back to all posts</a>