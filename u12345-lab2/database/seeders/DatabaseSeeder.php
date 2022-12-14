<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Article_Tag;
use App\Models\Tag;
use Carbon\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Cache\TagSet;
use Illuminate\Support\Facades\DB;

use function GuzzleHttp\Promise\each;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ArticleSeeder::class,
            TagSeeder::class,
            Article_TagSeeder::class,
        ]);


    }
}