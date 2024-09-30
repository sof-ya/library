<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Writer;

class WriterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $writers = [
            [
                "name" => "Стив Макконнелл"
            ],
            [
                "name" => "Михаил Фленов"
            ],
            [
                "name" => "Мэтт Стаффер"
            ],
            [
                "name" => "Дэвид Скляр"
            ],
            [
                "name" => "Адам Трахтенберг"
            ],
            [
                "name" => "Бэрон Шварц"
            ],
            [
                "name" => "Вадим Ткаченко"
            ],
            [
                "name" => "Петр Зайцев"
            ],
            [
                "name" => "Ральф Джонсон"
            ],
            [
                "name" => "Джон Влиссидес"
            ],
            [
                "name" => "Ричард Хелм"
            ],
            [
                "name" => "Эрих Гамма"
            ],
        ];       
                    
        foreach($writers as $writer) {
            Writer::firstOrCreate($writer);
        }
    }
}
