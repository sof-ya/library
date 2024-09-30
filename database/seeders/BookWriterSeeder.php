<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Writer;


class BookWriterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                'book_id' => Book::where("title","Совершенный код")->first()->id,
                'writer' => Writer::where("name","Стив Макконнелл")->first(),
            ],
            [
                'book_id' => Book::where("title","PHP глазами хакера")->first()->id,
                'writer' => Writer::where("name","Михаил Фленов")->first(),
            ],
            [
                'book_id' => Book::where("title","Laravel. Полное руководство")->first()->id,
                'writer' => Writer::where("name","Мэтт Стаффер")->first(),
            ],
            [
                'book_id' => Book::where("title","PHP. Рецепты программирования")->first()->id,
                'writer' => Writer::where("name","Дэвид Скляр")->first(),
            ],
            [
                'book_id' => Book::where("title","PHP. Рецепты программирования")->first()->id,
                'writer' => Writer::where("name","Адам Трахтенберг")->first(),
            ],
            [
                'book_id' => Book::where("title","MySQL по максимуму")->first()->id,
                'writer' => Writer::where("name","Бэрон Шварц")->first(),
            ],
            [
                'book_id' => Book::where("title","MySQL по максимуму")->first()->id,
                'writer' => Writer::where("name","Вадим Ткаченко")->first(),
            ],
            [
                'book_id' => Book::where("title","MySQL по максимуму")->first()->id,
                'writer' => Writer::where("name","Петр Зайцев")->first(),
            ],
            [
                'book_id' => Book::where("title","Паттерны объектно-ориентированного проектирования")->first()->id,
                'writer' => Writer::where("name","Ральф Джонсон")->first(),
            ],
            [
                'book_id' => Book::where("title","Паттерны объектно-ориентированного проектирования")->first()->id,
                'writer' => Writer::where("name","Джон Влиссидес")->first(),
            ],
            [
                'book_id' => Book::where("title","Паттерны объектно-ориентированного проектирования")->first()->id,
                'writer' => Writer::where("name","Ричард Хелм")->first(),
            ],
            [
                'book_id' => Book::where("title","Паттерны объектно-ориентированного проектирования")->first()->id,
                'writer' => Writer::where("name","Эрих Гамма")->first(),
            ],
        ];
        
        foreach($items as $item) {
            Book::find($item["book_id"])->writers()->attach($item["writer"]);
        }
    }
}
