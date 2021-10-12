<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($movies as $movie)
        <h1><a href="{{ route('movies.show', $movie->id) }}">{{$movie->title}}</a></h1>
        <div><b>Original title:</b>{{ $movie->original_title }}</div>
        <div><b>Description: </b>{{ $movie->overview }}</div>
    @endforeach
</body>
</html>