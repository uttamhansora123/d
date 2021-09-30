<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<50;$i++){
            Article::create([
                'title'=>$faker->sentence,
                'body'=>$faker->paragraph,
            ]);
        }
    }
}
