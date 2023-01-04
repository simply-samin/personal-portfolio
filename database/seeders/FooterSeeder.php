<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('footers')->insert([
            'number' => '+880',
            'short_description' => 'Example Short Description',
            'email' => 'samiulislamsamin7@gmail.com',
            'facebook' => 'facebook_url',
            'copyright' => 'all rights received',
            'created_at' => NULL,
            'updated_at' => NUll
        ]);
    }
}
