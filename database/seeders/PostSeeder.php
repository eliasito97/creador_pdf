<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            ['title' => 'Plantilla 1', 'content' => 'Contenido de la plantilla 1. Esta es la descripción inicial del post 1.'],
            ['title' => 'Plantilla 2', 'content' => 'Contenido de la plantilla 2. Este es el texto que describe la plantilla 2.'],
            ['title' => 'Plantilla 3', 'content' => 'Contenido de la plantilla 3. Aquí puedes incluir detalles sobre la plantilla 3.'],
            ['title' => 'Plantilla A', 'content' => 'Contenido de la plantilla A. Ejemplo de la plantilla A para el post.'],
            ['title' => 'Plantilla B', 'content' => 'Contenido de la plantilla B. Detalles e información para el post de la plantilla B.'],
            ['title' => 'Plantilla C', 'content' => 'Contenido de la plantilla C. Explicación completa sobre el post de la plantilla C.'],
            ['title' => 'Plantilla D', 'content' => 'Contenido de la plantilla D. Datos relevantes y detalles de la plantilla D.'],
        ]);
    }
}
