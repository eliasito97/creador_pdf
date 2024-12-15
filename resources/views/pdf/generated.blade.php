<!-- resources/views/pdf/generated.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento PDF</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .content {
            margin: 20px;
        }
        img {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
        }
        .images {
            display: flex;
            flex-wrap: wrap;
        }
        .images img {
            width: 48%;
            margin-right: 2%;
        }
        .images img:nth-child(odd) {
            margin-right: 0;
        }
    </style>
</head>
<body>
<div class="content">
    <h1>Texto ingresado:</h1>
    <p>{{ $text }}</p>

    <h2>Imágenes subidas:</h2>
    <div class="container mx-auto px-4 py-6">
        <div class="bg-white p-4 rounded-lg shadow-lg">
            <h1 class="text-2xl font-bold mb-4">{{ $post->title }}</h1>
            <p>{{ $post->content }}</p>

            <div class="mt-4">
                @foreach ($post->images as $image)
                    <img src="{{ asset('storage/' . $image->image) }}" alt="Imagen del post" class="w-full h-auto rounded-lg mb-4">
                @endforeach
            </div>
        </div>
    </div>
</div>
</body>
</html>
