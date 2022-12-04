<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($histories as $history)
        <p>{{ $history->id }}</p>
        <p>{{ $history->title }}</p>
        <p>{{ $history->content }}</p>
    @endforeach
</body>
</html>