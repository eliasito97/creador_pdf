<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\PostImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class PostController extends Controller
{
    public function show($id)
    {
        $post = Post::findOrFail($id); // Encuentra el post por ID
        return view('post.show', compact('post')); // Devuelve la vista con el post
    }
    public function create()
    {
        return view('post.create'); // Retorna la vista con el formulario
    }
    public function store(Request $request)
    {
        // Validación de los datos
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'images' => 'nullable|array', // Aceptar un array de imágenes
            'images.*' => 'image|mimes:jpg,jpeg,png,bmp,gif,svg|max:10240', // Validación de las imágenes
        ]);

        // Crear el post en la base de datos
        $post = Post::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
        ]);

        // Si el usuario ha subido imágenes
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                // Guarda cada imagen en el disco local (storage/app/public) y obtiene la ruta
                $imagePath = $image->store('posts', 'public');

                // Guarda la ruta de la imagen asociada con el post
                PostImage::create([
                    'post_id' => $post->id,
                    'image' => $imagePath,
                ]);
            }
        }
        $id = $post->id;

        return redirect()->route('post.show', compact('id'))->with('success', 'Post creado exitosamente.');
    }
}
