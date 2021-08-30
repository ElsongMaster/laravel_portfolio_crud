<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
 DB::table('titres')->insert([
            ["h3"=>"UI/UX Designer &amp; Web Developer.",
            "p2"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.",
            "img"=>"profile-img.jpg",
            "ul1_li1_strong"=>"Birthday:",
            "ul1_li1"=>"1 May 1995",
            "ul1_li2_strong"=>"Website:",
            "ul1_li2"=>"www.example.com",
            "ul1_li3_strong"=>"Phone:",
            "ul1_li3"=>"+123 456 7890",
            "ul1_li4_strong"=>"City:",
            "ul1_li4"=>"City : New York, USA",
            "ul2_li1_strong"=>"Age:",
            "ul2_li1"=>"30",
            "ul2_li2_strong"=>"Degree:",
            "ul2_li2"=>"Master",
            "ul2_li3_strong"=>"PhEmailone",
            "ul2_li3"=>"email@example.com",
            "ul2_li4_strong"=>"Freelance",
            "ul2_li4"=>"Available",
            "p3"=>"Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis. Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores."
        ],

    ]);
    
    }
}
