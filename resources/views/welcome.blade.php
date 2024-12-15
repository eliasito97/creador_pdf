<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista con Flexbox</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.3/dist/tailwind.min.css" rel="stylesheet">
    <!-- O puedes incluir tu propio archivo de estilos -->
</head>
<body class="bg-gray-100">

<!-- Contenedor principal de la página -->
<div class="container mx-auto px-4 py-6">

    <!-- Grid Flex 1: Contenido principal -->
    <div class="flex flex-wrap -mx-2 mb-6">
        <!-- Elemento 1 -->
        <div class="w-full sm:w-1/2 lg:w-1/3 px-2 mb-4">
            <div class="bg-white p-4 rounded-lg shadow-lg">
                <h2 class="text-xl font-semibold mb-2">Plantilla 1</h2>
                <p>Contenido o vista de la plantilla 1.</p>
            </div>
        </div>

        <!-- Elemento 2 -->
        <div class="w-full sm:w-1/2 lg:w-1/3 px-2 mb-4">
            <div class="bg-white p-4 rounded-lg shadow-lg">
                <h2 class="text-xl font-semibold mb-2">Plantilla 2</h2>
                <p>Contenido o vista de la plantilla 2.</p>
            </div>
        </div>

        <!-- Elemento 3 -->
        <div class="w-full sm:w-1/2 lg:w-1/3 px-2 mb-4">
            <div class="bg-white p-4 rounded-lg shadow-lg">
                <h2 class="text-xl font-semibold mb-2">Plantilla 3</h2>
                <p>Contenido o vista de la plantilla 3.</p>
            </div>
        </div>
    </div>

    <!-- Grid Flex 2: Contenido adicional -->
    <div class="flex flex-wrap -mx-2 mb-6">
        <!-- Elemento 1 -->
        <div class="w-full sm:w-1/2 lg:w-1/4 px-2 mb-4">
            <div class="bg-white p-4 rounded-lg shadow-lg">
                <h2 class="text-xl font-semibold mb-2">Plantilla A</h2>
                <p>Contenido o vista de la plantilla A.</p>
            </div>
        </div>

        <!-- Elemento 2 -->
        <div class="w-full sm:w-1/2 lg:w-1/4 px-2 mb-4">
            <div class="bg-white p-4 rounded-lg shadow-lg">
                <h2 class="text-xl font-semibold mb-2">Plantilla B</h2>
                <p>Contenido o vista de la plantilla B.</p>
            </div>
        </div>

        <!-- Elemento 3 -->
        <div class="w-full sm:w-1/2 lg:w-1/4 px-2 mb-4">
            <div class="bg-white p-4 rounded-lg shadow-lg">
                <h2 class="text-xl font-semibold mb-2">Plantilla C</h2>
                <p>Contenido o vista de la plantilla C.</p>
            </div>
        </div>

        <!-- Elemento 4 -->
        <div class="w-full sm:w-1/2 lg:w-1/4 px-2 mb-4">
            <div class="bg-white p-4 rounded-lg shadow-lg">
                <h2 class="text-xl font-semibold mb-2">Plantilla D</h2>
                <p>Contenido o vista de la plantilla D.</p>
            </div>
        </div>
    </div>

</div>

</body>
</html>
