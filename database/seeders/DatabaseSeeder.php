<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Group;
use App\Models\Korpus;
use App\Models\Lesson;
use App\Models\Dekanat;
use App\Models\Kafedra;
use App\Models\Teacher;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       \App\Models\Slider::factory(3)->create();
       Korpus::factory(6)->create();
       Dekanat::factory(10)->create();
       Kafedra::factory(20)->create();
       Teacher::factory(50)->create();
       Group::factory(100)->create();
       Lesson::factory(100)->create();



        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([RoleSeeder::class]);
        $this->call([AdminSeeder::class]);
        $this->call([AboutSeeder::class]);
        $this->call([SettingSeeder::class]);



    }
}
