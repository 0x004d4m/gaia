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
            ["id"=>1,"language_id"=>1,"about_id"=>1,"text"=>"-"],
        ]);

        DB::table('homes')->insert([
            ["id"=>1,"image"=>"-","video_url"=>"-"],
        ]);

        DB::table('home_texts')->insert([
            ["id"=>1,"language_id"=>1,"home_id"=>1,"text"=>"-"],
        ]);

        DB::table('contact_infos')->insert([
            [
                "id"=>1,
                "phone1"=>"+962795012069",
                "phone2"=>"+962795675754",
                "email"=>"info@gaia-toursjo.com",
                "POBox"=>"430054",
                "facebook"=>"https://web.facebook.com/GaiaToursJordan/?_rdc=1&_rdr",
                "snapchat"=>"-",
                "instagram"=>"https://www.instagram.com/gaia_tours/",
                "location"=>"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d16099.468810865834!2d35.87031172005533!3d31.974556210827107!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x91ec9ec47874b0dd!2sGaia%20Tours!5e0!3m2!1sen!2sjo!4v1630101588477!5m2!1sen!2sjo",
            ],
        ]);

        DB::table('galleries')->insert([
            ["id"=>1,"image"=>"gallery/1.jpg"],
            ["id"=>2,"image"=>"gallery/2.jpg"],
            ["id"=>3,"image"=>"gallery/3.jpg"],
            ["id"=>4,"image"=>"gallery/4.jpg"],
            ["id"=>5,"image"=>"gallery/5.jpg"],
            ["id"=>6,"image"=>"gallery/6.jpg"],
            ["id"=>8,"image"=>"gallery/8.jpg"],
            ["id"=>9,"image"=>"gallery/9.jpg"],
            ["id"=>11,"image"=>"gallery/11.jpg"],
            ["id"=>12,"image"=>"gallery/12.jpg"],
            ["id"=>13,"image"=>"gallery/13.jpg"],
            ["id"=>14,"image"=>"gallery/14.jpg"],
            ["id"=>15,"image"=>"gallery/15.jpg"],
            ["id"=>16,"image"=>"gallery/16.jpg"],
            ["id"=>17,"image"=>"gallery/17.jpg"],
            ["id"=>18,"image"=>"gallery/18.jpg"],
            ["id"=>19,"image"=>"gallery/19.jpg"],
            ["id"=>20,"image"=>"gallery/20.jpg"],
            ["id"=>22,"image"=>"gallery/22.jpg"],
            ["id"=>23,"image"=>"gallery/23.jpg"],
            ["id"=>24,"image"=>"gallery/24.jpg"],
            ["id"=>25,"image"=>"gallery/25.jpg"],
            ["id"=>26,"image"=>"gallery/26.jpg"],
            ["id"=>27,"image"=>"gallery/27.jpg"],
            ["id"=>28,"image"=>"gallery/28.jpg"],
            ["id"=>29,"image"=>"gallery/29.jpg"],
            ["id"=>30,"image"=>"gallery/30.jpg"],
            ["id"=>31,"image"=>"gallery/31.jpg"],
            ["id"=>32,"image"=>"gallery/32.jpg"],
            ["id"=>33,"image"=>"gallery/33.jpg"],
            ["id"=>34,"image"=>"gallery/34.jpg"],
            ["id"=>35,"image"=>"gallery/35.jpg"],
            ["id"=>36,"image"=>"gallery/36.jpg"],
            ["id"=>37,"image"=>"gallery/37.jpg"],
            ["id"=>38,"image"=>"gallery/38.jpg"],
            ["id"=>39,"image"=>"gallery/39.jpg"],
            ["id"=>40,"image"=>"gallery/40.jpg"],
            ["id"=>41,"image"=>"gallery/41.jpg"],
            ["id"=>42,"image"=>"gallery/42.jpg"],
            ["id"=>43,"image"=>"gallery/43.jpg"],
            ["id"=>44,"image"=>"gallery/44.jpg"],
            ["id"=>45,"image"=>"gallery/45.jpg"],
            ["id"=>46,"image"=>"gallery/46.jpg"],
            ["id"=>47,"image"=>"gallery/47.jpg"],
            ["id"=>48,"image"=>"gallery/48.jpg"],
            ["id"=>49,"image"=>"gallery/49.jpg"],
            ["id"=>50,"image"=>"gallery/50.jpg"],
            ["id"=>51,"image"=>"gallery/51.jpg"],
            ["id"=>52,"image"=>"gallery/52.jpg"],
            ["id"=>54,"image"=>"gallery/54.jpg"],
            ["id"=>57,"image"=>"gallery/57.jpg"],
            ["id"=>58,"image"=>"gallery/58.jpg"],
            ["id"=>59,"image"=>"gallery/59.jpg"],
            ["id"=>60,"image"=>"gallery/60.jpg"],
            ["id"=>61,"image"=>"gallery/61.jpg"],
            ["id"=>62,"image"=>"gallery/62.jpg"],
            ["id"=>63,"image"=>"gallery/63.jpg"],
            ["id"=>64,"image"=>"gallery/64.jpg"],
            ["id"=>65,"image"=>"gallery/65.jpg"],
            ["id"=>66,"image"=>"gallery/66.jpg"],
            ["id"=>67,"image"=>"gallery/67.jpg"],
        ]);
    }
}
