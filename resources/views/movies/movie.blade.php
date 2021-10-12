<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>{{$movie->title}}</h1>
    <div><b>Original title:</b>{{ $movie->original_title }}</div>
    <div><b>Description: </b>{{ $movie->overview }}</div>
    <br>
    <button><a href="/">Return</a></button>
</body>
</html>