<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $about=Setting::create([
            'foot_desc'=>' Azərbaycan Respublikasının dövlət ali təhsil müəssisəsidir və Azərbaycan Hava Yolları Qapalı Səhmdar Cəmiyyətinin (QSC) strukturuna daxildir.',
            'email'=>'info@gmail.com',
            'number'=>'070 527 79 99',
            'adress'=>'30 Mərdəkan pr, Bakı',
            'ins'=>'www',
            'fb'=>'www',
            'tw'=>'www',
            'ln'=>'www',

        ]);
    }
}
