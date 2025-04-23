<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
</head>

<body>
    <h1>{{ $title }}</h1>
    <p>{{ $description }}</p>

    <h2>Blog Posts</h2>
    <ul>
        @if (count($posts) > 0)
            @foreach ($posts as $post)
                <li>
                    <h3>{{ $post['title'] }}</h3>
                    <p>{{ $post['content'] }}</p>
                </li>
            @endforeach
        @else
            <p>No blog posts available at the moment.</p>
        @endif
    </ul>
</body>

</html>