<?php

use Illuminate\Database\Seeder;

class BoxSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('boxes')->insert([
            [
                'name'  => 'Skrzynka_1',
                'image' => 'box_1.png',
                'price' => 100,
            ],
            [
                'name'  => 'Skrzynka_2',
                'image' => 'box_2.png',
                'price' => 120,
            ],
            [
                'name'  => 'Skrzynka_3',
                'image' => 'box_3.png',
                'price' => 130,
            ],
            [
                'name'  => 'Skrzynka_4',
                'image' => 'box_4.png',
                'price' => 140,
            ],
            [
                'name'  => 'Skrzynka_5',
                'image' => 'box_5.png',
                'price' => 150,
            ],
            [
                'name'  => 'Skrzynka_6',
                'image' => 'box_6.png',
                'price' => 160,
            ],
        ]);
    }
}
