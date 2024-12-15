<form action="{{ route('generate.pdf') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="title">Título</label>
    <input type="text" name="title"  required>

    <label for="content">Contenido</label>
    <textarea name="contenido" required></textarea>

    <label for="images">Sube tus imágenes</label>
    <input type="file" name="images[]" multiple>

    <button type="submit">Generar PDF</button>
</form>
