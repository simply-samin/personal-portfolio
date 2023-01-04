<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeSlideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home_slides')->insert([
            'title' => 'Example Title',
            'short_title' => 'Example Short Title',
            'home_slide' => NULL,
            'video_url' => NULL,
            'created_at' => NULL,
            'updated_at' => NUll
        ]);
    }
}
