<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GestionArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $articles = [
            [
                'titre' => 'souris',
                'description' => 'souris optique sans fil',
                'order' => 5,
                'is_active' => false,

            ],
            [
                'titre' => 'clavier',
                'description' => 'clavier de marque wiki',
                'order' => 3,
                'is_active' => true,
            ],
            [
                'titre' => 'Flash disque',
                'description' => 'Flash disque de marque sandisk',
                'order' => 2,
                'is_active' => false,
            ],
            [
                'titre' => 'Ecran',
                'description' => 'Ecran 17"',
                'order' => 1,
                'is_active' => false,
            ],
            [
                'titre' => 'Haut Parleur',
                'description' => 'Haut parleur sony',
                'order' => 7,
                'is_active' => false,
            ],
        ];

        foreach ($articles as $article) {
            DB::connection('mysql')
                ->table('articles')
                ->insert($article);
        }
    }
}
