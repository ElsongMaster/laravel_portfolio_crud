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
                "span1"=>"232",
                "span2"=>"521",
                "span3"=>"1,463",
                "span4"=>"15",
                "strong1"=>"Happy Clients",
                "strong2"=>"Projects",
                "strong3"=>"Hours Of Support",
                "strong4"=>"Hard Workers",
                "p1"=>"consequuntur quae",
                "p2"=>"adipisci atque cum quia aut",
                "p3"=>"aut commodi quaerat",
                "p4"=>"rerum asperiores dolor",
                ]
        ]);
    }
}
