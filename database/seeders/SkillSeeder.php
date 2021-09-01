<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('skills')->insert([
             
                

                ["tech"=>"HTML",
                 "val"=>"100",],

                [ "tech"=>"CSS",
                 "val"=>"90",],

                [ "tech"=>"Javascript",
                 "val"=>"75",],

                [ "tech"=>"PHP",
                 "val"=>"80",],

                [ "tech"=>"WordPress/CMS",
                 "val"=>"90",],

                [ "tech"=>"Photoshop",
                 "val"=>"55",]

             
         ]);
    }
}
