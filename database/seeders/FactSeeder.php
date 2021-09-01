<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class FactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('facts')->insert([ 
            [

                "span"=>"232",
                "icon"=>"icofont-simple-smile",
                "p_strong"=>"Happy Clients",
                "p"=>"consequuntur quae",
                "delay"=>""



            ],
            [
                

                "span"=>"521",
                "icon"=>"icofont-simple-smile",
                "p_strong"=>"Projects",
                "p"=>"adipisci atque cum quia aut",
                "delay"=>"100"


            ],
            [
                

                "span"=>"1,463",
                "icon"=>"icofont-simple-smile",
                "p_strong"=>"Hours Of Support",
                "p"=>"aut commodi quaerat",
                "delay"=>"200"
            ],
            [
                


                "span"=>"15",
                "icon"=>"icofont-simple-smile",
                "p_strong"=>"Hard Workers",
                "p"=>"rerum asperiores dolor",
                "delay"=>"300"

                ]
        ]);
    }
}
