<form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="title">Título:</label>
    <input type="text" name="title" id="title" required class="border rounded p-2 mb-4">

    <label for="content">Contenido:</label>
    <textarea name="content" id="content" required class="border rounded p-2 mb-4"></textarea>

    <label for="image">Imágenes:</label>
    <input type="file" name="images[]" id="images" multiple class="border rounded p-2 mb-4">

    <button type="submit" class="bg-blue-500 text-white p-2 rounded">Crear Post</button>
</form>
