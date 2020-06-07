<?php

use Illuminate\Database\Seeder;

class RuneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('runes')->insert([
            [
                'name'  => 'Runa_1',
                'image' => 'rune_1.png',
                'bonus' => 100,
            ],
            [
                'name'  => 'Runa_2',
                'image' => 'rune_2.png',
                'bonus' => 120,
            ],
            [
                'name'  => 'Runa_3',
                'image' => 'rune_3.png',
                'bonus' => 130,
            ],
            [
                'name'  => 'Runa_4',
                'image' => 'rune_4.png',
                'bonus' => 140,
            ],
            [
                'name'  => 'Runa_5',
                'image' => 'rune_5.png',
                'bonus' => 150,
            ],
            [
                'name'  => 'Runa_6',
                'image' => 'rune_6.png',
                'bonus' => 160,
            ],
        ]);
    }
}
