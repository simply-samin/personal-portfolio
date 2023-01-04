<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            'title' => 'example title',
            'short_title' => 'Example Short title',
            'short_description' => 'Example Short Description',
            'long_description' => 'Example long Description',
            'about_image' => NULL,
            'created_at' => NULL,
            'updated_at' => NUll
        ]);
    }
}
