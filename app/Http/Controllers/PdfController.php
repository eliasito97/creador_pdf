<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

use Barryvdh\DomPDF\Facade\Pdf;


class PdfController extends Controller
{
    public function generatePDF(Request $request)
    {
        $title = $request->title; // Aquí defines el valor de $title
        $content =$request->contenido;
        // Pasa los datos necesarios a la vista
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                // Verifica que el archivo sea válido
                if ($image->isValid()) {
                    $image->move(public_path('uploads/'), $image->getClientOriginalName());
                }
            }
        }

        // Genera el PDF
        $pdf = PDF::loadView('pdf.document', compact('image','title', 'content'));

        // Descarga el PDF
        return $pdf->download('document.pdf');
    }
}
