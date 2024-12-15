<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de plantillas</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.3/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="">

<!-- Contenedor principal de la página -->
<div class="container mx-auto px-4 py-6">
    <!-- Grid Flex 1: Contenido principal -->
    <div class="flex flex-wrap -mx-2 mb-6">
        <!-- Elemento 1 (Plantilla 1) -->
        <div class="w-full sm:w-1/2 lg:w-1/3 px-2 mb-4 border border-white hover:border-black">
            <a href="{{ route('post.show', 1) }}">
                <h2 class="text-xl font-semibold mb-2">Plantilla 1</h2>
                <p>Contenido de la plantilla 1.</p>
            </a>
        </div>
        <div class="w-full sm:w-1/2 lg:w-1/3 px-2 mb-4 border border-white hover:border-black">
            <a href="{{ route('post.create') }}" class="rounded" type="button">
                <h2 class="text-xl font-semibold mb-2">crear plantilla</h2>
            </a>
        </div>
        <div class="w-full sm:w-1/2 lg:w-1/3 px-2 mb-4 border border-white hover:border-black">
            <a href="{{ route('pdf.form') }}" class="rounded" type="button">
                <h2 class="text-xl font-semibold mb-2">crear pdf</h2>
            </a>
        </div>

</div>

</body>
</html>
