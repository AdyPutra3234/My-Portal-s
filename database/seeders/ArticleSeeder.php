<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $isProduction = app()->environment('production');
        $jsonPath = database_path('data/articles.json');
        $option = $this->command->confirm('Do you want to generate data from your data json? (database/data/**.json)', true);

        if ($option || $isProduction) {
            if (file_exists($jsonPath)) {
                $json = file_get_contents($jsonPath);
                $articles = json_decode($json, true);

                foreach ($articles as $article) {
                    \App\Models\Article::create($article);
                }
            } else {
                $this->command->info('your data .json is not found');
            }
        } else {
            Article::factory(25)->create();
        }
    }
}
