<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $about=About::create([
            'title'    =>  fake()->name(),
            'desc'   =>  fake()->text(1500),
            'img'    =>  fake()->ImageUrl(),

        ]);
    }
}
