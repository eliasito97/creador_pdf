<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->title }}</title>
</head>
<body>
<div class="content">
    <h1>Texto ingresado:</h1>
    <div class="container mx-auto px-4 py-6">
        <div class="bg-white p-4 rounded-lg shadow-lg">
            <h1 class="text-2xl font-bold mb-4">{{ $post->title }}</h1>
            <p>{{ $post->content }}</p>
            <h2>Imágenes subidas:</h2>
            <div class="mt-4">
                @foreach ($post->images as $image)
                    <img src="{{ asset('public/' . $image->image) }}" alt="Imagen del post" class="w-full h-auto rounded-lg mb-4">
                @endforeach
            </div>
        </div>
    </div>
    <form action="{{ route('generate.pdf', $post->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <button type="submit" class="bg-blue-500 text-white p-2 rounded">Crear Post</button>
    </form>
</div>
</body>
</html>

