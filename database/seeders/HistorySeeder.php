<?php

namespace Database\Seeders;

use App\Models\History;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Exemplo para criar uma história no seeder
        History::factory()->create([
            'title' => 'titulo',
            'categoy' => 'categoria',
            'paragraph1' => 'Escreva o parágrafo 1 aqui',
            'paragraph2' => 'Escreva o parágrafo 2 aqui',
            'paragraph3' => 'Escreva o parágrafo 3 aqui',
            'image' => 'nome da imagem na pasta public/img',
            'origin' => 'Origem da História (Autor, popular, etc)'
        ]);
        */

        History::factory()->count(200)->create();
    }
}
