<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        DB::table('portfolios')->insert([ 
            [
"titre_h2"=>"Portfolio",
                "p_description"=>"Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.",
                "ul_li1"=>"All",
                "ul_li2"=>"App",
                "ul_li3"=>"Card",
                "ul_li4"=>"Web",
                "img1"=>"portfolio-1.jpg",
                "img2"=>"portfolio-2.jpg",
                "img3"=>"portfolio-3.jpg",
                "img4"=>"portfolio-4.jpg",
                "img5"=>"portfolio-5.jpg",
                "img6"=>"portfolio-6.jpg",
                "img7"=>"portfolio-7.jpg",
                "img8"=>"portfolio-8.jpg",
                "img9"=>"portfolio-9.jpg"

                ]
        ]);
    
}
}