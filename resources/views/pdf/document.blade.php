<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .content {
            margin-top: 20px;
        }
        .images img {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<h1>{{ $title }}</h1>
<p>{{ $content }}</p>

<div class="images">


    @foreach ($image as $ima)
        <img class="rounded-circle" width="35" height="35"
             src="{{ asset('storage/'.$ima) }}" alt="">
    @endforeach
</div>

</body>
</html>

