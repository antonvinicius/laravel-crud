<?php

use Illuminate\Database\Seeder;
use App\Models\ModelBook;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(ModelBook $book)
    {
        $book->create([
            'title' =>'O senhor dos aneis',
            'pages' =>'100',
            'price' =>'80.99',
            'id_user' =>'1'
        ]);

        $book->create([
            'title' =>'Titanic',
            'pages' =>'102',
            'price' =>'86.99',
            'id_user' =>'2'
        ]);

        $book->create([
            'title' =>'50 Tons de cinza',
            'pages' =>'300',
            'price' =>'100.99',
            'id_user' =>'2'
        ]);
    }
}
