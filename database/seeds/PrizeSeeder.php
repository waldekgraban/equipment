<?php

use Illuminate\Database\Seeder;

class PrizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prizes')->insert([
            [
                'name'  => 'Nagroda_1',
                'image' => 'prize_1.png',
                'code'  => 001,
                'price' => 100,
            ],
            [
                'name'  => 'Nagroda_2',
                'image' => 'prize_2.png',
                'code'  => 002,
                'price' => 120,
            ],
            [
                'name'  => 'Nagroda_3',
                'image' => 'prize_3.png',
                'code'  => 003,
                'price' => 130,
            ],
            [
                'name'  => 'Nagroda_4',
                'image' => 'prize_4.png',
                'code'  => 004,
                'price' => 140,
            ],
            [
                'name'  => 'Nagroda_5',
                'image' => 'prize_5.png',
                'code'  => 005,
                'price' => 150,
            ],
            [
                'name'  => 'Nagroda_6',
                'image' => 'prize_6.png',
                'code'  => 006,
                'price' => 160,
            ],
        ]);
    }
}
