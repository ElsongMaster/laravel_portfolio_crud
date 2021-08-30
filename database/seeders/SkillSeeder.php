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
             [
                
"titre_h2"=>"Skills",
                "p_description"=>"Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.",
                "skill1"=>"HTML",
                 "val1"=>"100",
                 "valBar1"=>"100",
                 "skill2"=>"CSS",
                 "val2"=>"90",
                 "valBar2"=>"90",
                 "skill3"=>"Javascript",
                 "val3"=>"75",
                 "valBar3"=>"75",
                 "skill4"=>"PHP",
                 "val4"=>"80",
                 "valBar4"=>"80",
                 "skill5"=>"WordPress/CMS",
                 "val5"=>"90",
                 "valBar5"=>"90",
                 "skill6"=>"Photoshop",
                 "val6"=>"55",
                 "valBar6"=>"55"
             ]
         ]);
    }
}
