<h1>Crop News</h1>
@foreach ($blogs as $blog)
    <h2>{{ $blog->title }}</h2>
    <p>{{ $blog->content }}</p>
@endforeach
