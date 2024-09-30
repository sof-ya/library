<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $books=[ 
            [
                "title" => "Совершенный код"
            ],
            [
                "title" => "PHP глазами хакера"
            ],
            [
                "title" => "Laravel. Полное руководство"
            ],
            [
                "title" => "PHP. Рецепты программирования"
            ],
            [
                "title" => "MySQL по максимуму"
            ],
            [
                "title" => "Паттерны объектно-ориентированного проектирования"
            ],
        ];
 
        foreach($books as $book) {
            Book::firstOrCreate($book);
        }
    }
}
