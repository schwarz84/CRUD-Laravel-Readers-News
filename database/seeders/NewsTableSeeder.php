<?php

namespace Database\Seeders;

use App\Http\Controllers\NewsController;
use App\Models\News;
use App\Models\Reader;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @throws \Exception
     */
    public function run(): void
    {
        $newsList = News::factory(30)->create();

        $readers = Reader::all();

//        Asigno aleatroiamente las lectores a las noticias
        foreach ($newsList as $news) {
            $randomReaders = $readers->random(random_int(1,7));

            //Completo la tabla intermedia
            foreach ($randomReaders as $reader) {
                $news->readers()->attach($reader->id);
            }
        }


    }
}
