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
            ["id"=>1,"image"=>"images/bg_1.jpg","image2"=>"images/about-1.jpg"],
        ]);

        DB::table('about_texts')->insert([
            ["id"=>1,"language_id"=>1,"about_id"=>1,"text"=>"-"],
        ]);

        DB::table('homes')->insert([
            ["id"=>1,"image"=>"images/bg_5.jpg","video_url"=>"/petra.mp4"],
        ]);

        DB::table('home_texts')->insert([
            ["id"=>1,"language_id"=>1,"home_id"=>1,"text"=>"-"],
        ]);

        DB::table('website_content')->insert([
            [
                "id"=>1,
                "language_id"=>1,
                'home' =>'Home',
                'about_us' =>'About Us',
                'gallery' =>'Gallery',
                'programs' =>'Programs',
                'hotels' =>'Hotels',
                'transportation' =>'Transportation',
                'contact_us' =>'Contact Us',
                'welcome' =>'Welcome To Gaia Tours',
                'banner_title' =>'Banner Title',
                'contact_number_1' =>'Contact Number 1',
                'contact_number_2' =>'Contact Number 2',
                'p_o_box' =>'P.O.Box',
                'email_address' =>'Email Address',
                'subject' =>'Subject',
                'message' =>'Message',
                'first_name' =>'First Name',
                'last_name' =>'Last Name',
                'phone' =>'Phone',
                'email' =>'Email',
                'date_of_birth' =>'Date Of Birth',
                'number_of_people' =>'Number Of People',
                'passport_number' =>'Passport Number',
                'passport_issue_date' =>'Passport Issue Date',
                'passport_expiry_date' =>'Passport Expiry Date',
                'nationality' =>'Nationality',
                'hotel_room_id' =>'Select A Room',
                'hotel_name' =>'Hotel Name',
                'from' =>'From',
                'to' =>'To',
                'locations' =>'Locations',
                'price' =>'Price',
                'hotel_site' =>'Hotel Site',
                'read_more' =>'Read More',
                'book_now' =>'Book Now',
                'send_message' =>'Send Message',
                'submit' =>'Submit',
                'search' =>'Search',
                'payment_failed' =>'Payment Failed',
                'payment_success' =>'Payment Success',
                'start_payment' =>'Start Payment',
                'message_sent_successfully' =>'Message Sent Successfully',
                'something_went_wrong' =>'Something Went Wrong',
                'payment_unsuccessful' =>'Payment unsuccessful, please try again later.',
                'please_pay_to_continue' =>'Please Pay To Continue',
                'payment_successful' =>'Thank You For Booking, Someone Will Contact You Later To Confirm',
                'terms_and_conditions' =>'Terms And Conditions',
                'wysiwyg-editor' =>'',
            ],
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
                "location"=>'<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3384.7679099433076!2d35.87142031493794!3d31.967192532140782!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151ca0536fcfbe31%3A0x91ec9ec47874b0dd!2sGaia%20Tours!5e0!3m2!1sen!2sjo!4v1655033544198!5m2!1sen!2sjo" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            ],
        ]);

        DB::table('galleries')->insert([
            ["id"=>1,"image"=>"images/gallery/1.jpg"],
            ["id"=>2,"image"=>"images/gallery/2.jpg"],
            ["id"=>3,"image"=>"images/gallery/3.jpg"],
            ["id"=>4,"image"=>"images/gallery/4.jpg"],
            ["id"=>5,"image"=>"images/gallery/5.jpg"],
            ["id"=>6,"image"=>"images/gallery/6.jpg"],
            ["id"=>8,"image"=>"images/gallery/8.jpg"],
            ["id"=>9,"image"=>"images/gallery/9.jpg"],
            ["id"=>11,"image"=>"images/gallery/11.jpg"],
            ["id"=>12,"image"=>"images/gallery/12.jpg"],
            ["id"=>13,"image"=>"images/gallery/13.jpg"],
            ["id"=>14,"image"=>"images/gallery/14.jpg"],
            ["id"=>15,"image"=>"images/gallery/15.jpg"],
            ["id"=>16,"image"=>"images/gallery/16.jpg"],
            ["id"=>17,"image"=>"images/gallery/17.jpg"],
            ["id"=>18,"image"=>"images/gallery/18.jpg"],
            ["id"=>19,"image"=>"images/gallery/19.jpg"],
            ["id"=>20,"image"=>"images/gallery/20.jpg"],
            ["id"=>22,"image"=>"images/gallery/22.jpg"],
            ["id"=>23,"image"=>"images/gallery/23.jpg"],
            ["id"=>24,"image"=>"images/gallery/24.jpg"],
            ["id"=>25,"image"=>"images/gallery/25.jpg"],
            ["id"=>26,"image"=>"images/gallery/26.jpg"],
            ["id"=>27,"image"=>"images/gallery/27.jpg"],
            ["id"=>28,"image"=>"images/gallery/28.jpg"],
            ["id"=>29,"image"=>"images/gallery/29.jpg"],
            ["id"=>30,"image"=>"images/gallery/30.jpg"],
            ["id"=>31,"image"=>"images/gallery/31.jpg"],
            ["id"=>32,"image"=>"images/gallery/32.jpg"],
            ["id"=>33,"image"=>"images/gallery/33.jpg"],
            ["id"=>34,"image"=>"images/gallery/34.jpg"],
            ["id"=>35,"image"=>"images/gallery/35.jpg"],
            ["id"=>36,"image"=>"images/gallery/36.jpg"],
            ["id"=>37,"image"=>"images/gallery/37.jpg"],
            ["id"=>38,"image"=>"images/gallery/38.jpg"],
            ["id"=>39,"image"=>"images/gallery/39.jpg"],
            ["id"=>40,"image"=>"images/gallery/40.jpg"],
            ["id"=>41,"image"=>"images/gallery/41.jpg"],
            ["id"=>42,"image"=>"images/gallery/42.jpg"],
            ["id"=>43,"image"=>"images/gallery/43.jpg"],
            ["id"=>44,"image"=>"images/gallery/44.jpg"],
            ["id"=>45,"image"=>"images/gallery/45.jpg"],
            ["id"=>46,"image"=>"images/gallery/46.jpg"],
            ["id"=>47,"image"=>"images/gallery/47.jpg"],
            ["id"=>48,"image"=>"images/gallery/48.jpg"],
            ["id"=>49,"image"=>"images/gallery/49.jpg"],
            ["id"=>50,"image"=>"images/gallery/50.jpg"],
            ["id"=>51,"image"=>"images/gallery/51.jpg"],
            ["id"=>52,"image"=>"images/gallery/52.jpg"],
            ["id"=>54,"image"=>"images/gallery/54.jpg"],
            ["id"=>57,"image"=>"images/gallery/57.jpg"],
            ["id"=>58,"image"=>"images/gallery/58.jpg"],
            ["id"=>59,"image"=>"images/gallery/59.jpg"],
            ["id"=>60,"image"=>"images/gallery/60.jpg"],
            ["id"=>61,"image"=>"images/gallery/61.jpg"],
            ["id"=>62,"image"=>"images/gallery/62.jpg"],
            ["id"=>63,"image"=>"images/gallery/63.jpg"],
            ["id"=>64,"image"=>"images/gallery/64.jpg"],
            ["id"=>65,"image"=>"images/gallery/65.jpg"],
            ["id"=>66,"image"=>"images/gallery/66.jpg"],
            ["id"=>67,"image"=>"images/gallery/67.jpg"],
        ]);
    }
}
