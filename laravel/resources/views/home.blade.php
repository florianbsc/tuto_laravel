<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>mon mini blog</title>
</head>
<body>

<h1>Nos articles</h1>
<ul>
    @foreach($articles as $article)
        <li>{{$article->title}}</li>
    @endforeach
</ul>
</body>
</html>
