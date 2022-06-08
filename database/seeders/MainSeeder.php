<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MainSeeder extends Seeder
{
    public function run()
    {
        DB::table('languages')->insert([
            ["id"=>1,"language"=>"English","direction"=>"ltr"],
        ]);

        DB::table('abouts')->insert([
            ["id"=>1,"image"=>"-"],
        ]);

        DB::table('about_texts')->insert([
            ["id"=>1,"language_id"=>1,"about_id"=>1,"text"=>"c"],
        ]);
    }
}
