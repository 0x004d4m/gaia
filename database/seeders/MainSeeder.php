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
                "facebook"=>"https://web.facebook.com/GaiaToursJordan/?_rdc=1&_rdr",
                "snapchat"=>"-",
                "instagram"=>"https://www.instagram.com/gaia_tours/",
                "phone1"=>"+962795012069",
                "phone2"=>"+962795675754",
                "email"=>"info@gaia-toursjo.com",
                "POBox"=>"430054",
                "location"=>"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d16099.468810865834!2d35.87031172005533!3d31.974556210827107!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x91ec9ec47874b0dd!2sGaia%20Tours!5e0!3m2!1sen!2sjo!4v1630101588477!5m2!1sen!2sjo",
            ],
        ]);

        DB::table('galleries')->insert([
            ["id"=>1,"image"=>"gallery/1.png"],
            ["id"=>2,"image"=>"gallery/2.png"],
            ["id"=>3,"image"=>"gallery/3.png"],
            ["id"=>4,"image"=>"gallery/4.png"],
            ["id"=>5,"image"=>"gallery/5.png"],
            ["id"=>6,"image"=>"gallery/6.png"],
            ["id"=>7,"image"=>"gallery/7.png"],
            ["id"=>8,"image"=>"gallery/8.png"],
            ["id"=>9,"image"=>"gallery/9.png"],
            ["id"=>10,"image"=>"gallery/10.png"],
            ["id"=>11,"image"=>"gallery/11.png"],
            ["id"=>12,"image"=>"gallery/12.png"],
            ["id"=>13,"image"=>"gallery/13.png"],
            ["id"=>14,"image"=>"gallery/14.png"],
            ["id"=>15,"image"=>"gallery/15.png"],
            ["id"=>16,"image"=>"gallery/16.png"],
            ["id"=>17,"image"=>"gallery/17.png"],
            ["id"=>18,"image"=>"gallery/18.png"],
            ["id"=>19,"image"=>"gallery/19.png"],
            ["id"=>20,"image"=>"gallery/20.png"],
            ["id"=>21,"image"=>"gallery/21.png"],
            ["id"=>22,"image"=>"gallery/22.png"],
            ["id"=>23,"image"=>"gallery/23.png"],
            ["id"=>24,"image"=>"gallery/24.png"],
            ["id"=>25,"image"=>"gallery/25.png"],
            ["id"=>26,"image"=>"gallery/26.png"],
            ["id"=>27,"image"=>"gallery/27.png"],
            ["id"=>28,"image"=>"gallery/28.png"],
            ["id"=>29,"image"=>"gallery/29.png"],
            ["id"=>30,"image"=>"gallery/30.png"],
            ["id"=>31,"image"=>"gallery/31.png"],
            ["id"=>32,"image"=>"gallery/32.png"],
            ["id"=>33,"image"=>"gallery/33.png"],
            ["id"=>34,"image"=>"gallery/34.png"],
            ["id"=>35,"image"=>"gallery/35.png"],
            ["id"=>36,"image"=>"gallery/36.png"],
            ["id"=>37,"image"=>"gallery/37.png"],
            ["id"=>38,"image"=>"gallery/38.png"],
            ["id"=>39,"image"=>"gallery/39.png"],
            ["id"=>40,"image"=>"gallery/40.png"],
            ["id"=>41,"image"=>"gallery/41.png"],
            ["id"=>42,"image"=>"gallery/42.png"],
            ["id"=>43,"image"=>"gallery/43.png"],
            ["id"=>44,"image"=>"gallery/44.png"],
            ["id"=>45,"image"=>"gallery/45.png"],
            ["id"=>46,"image"=>"gallery/46.png"],
            ["id"=>47,"image"=>"gallery/47.png"],
            ["id"=>48,"image"=>"gallery/48.png"],
            ["id"=>49,"image"=>"gallery/49.png"],
            ["id"=>50,"image"=>"gallery/50.png"],
            ["id"=>51,"image"=>"gallery/51.png"],
            ["id"=>52,"image"=>"gallery/52.png"],
            ["id"=>53,"image"=>"gallery/53.png"],
            ["id"=>54,"image"=>"gallery/54.png"],
            ["id"=>55,"image"=>"gallery/55.png"],
            ["id"=>56,"image"=>"gallery/56.png"],
            ["id"=>57,"image"=>"gallery/57.png"],
            ["id"=>58,"image"=>"gallery/58.png"],
            ["id"=>59,"image"=>"gallery/59.png"],
            ["id"=>60,"image"=>"gallery/60.png"],
            ["id"=>61,"image"=>"gallery/61.png"],
            ["id"=>62,"image"=>"gallery/62.png"],
            ["id"=>63,"image"=>"gallery/63.png"],
            ["id"=>64,"image"=>"gallery/64.png"],
            ["id"=>65,"image"=>"gallery/65.png"],
            ["id"=>66,"image"=>"gallery/66.png"],
            ["id"=>67,"image"=>"gallery/67.png"],
        ]);
    }
}
