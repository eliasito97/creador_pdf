<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\PostImage;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

use Barryvdh\DomPDF\Facade\Pdf;


class PdfController extends Controller
{
    public function showForm()
    {
        return view('pdf.form');
    }
    public function generatePDF($id)
    {
        $post = Post::findOrFail($id); // Encuentra el post por ID
        $title = $post->title; // Aquí defines el valor de $title
        $content = $post->content;
        $post_image = PostImage::where('post_id', $post->id)->get();
        // Pasa los datos necesarios a la vista

        $image = []; // Inicializamos el array de imágenes
        if (!is_array($post_image)) {
            // Si es una colección o array
            foreach ($post_image as $ima) {
                $image[] = $ima->image; // Accede al campo 'image'
            }
        } else {
            // Si es un objeto único
            $image[] = $post_image->image;
        }

        // Genera el PDF
        $pdf = PDF::loadView('pdf.document', compact('image','title', 'content'));

        // Descarga el PDF
        return $pdf->download('document.pdf');
    }
}
