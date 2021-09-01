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
                    "img"=>"portfolio-1.jpg",
                    "filter"=>"filter-app",
                    "title"=>"App 1"
            ],
                [
                    "img"=>"portfolio-2.jpg",
                    "filter"=>"filter-web",
                    "title"=>"Web 3"
                ],
                [
                    "img"=>"portfolio-3.jpg",
                    "filter"=>"filter-app",
                    "title"=>"App 2"
                ],
                [
                    "img"=>"portfolio-4.jpg",
                    "filter"=>"filter-card",
                    "title"=>"Card 2"
                ],
                [
                    "img"=>"portfolio-5.jpg",
                    "filter"=>"filter-web",
                    "title"=>"Web 2"
                ],
                [
                    "img"=>"portfolio-6.jpg",
                    "filter"=>"filter-app",
                    "title"=>"App 3"
                ],
                [
                    "img"=>"portfolio-7.jpg",
                    "filter"=>"filter-card",
                    "title"=>"Card 1"
                ],
                [
                    "img"=>"portfolio-8.jpg",
                    "filter"=>"filter-card",
                    "title"=>"Card 3"
                ],
                [
                    "img"=>"portfolio-9.jpg",
                    "filter"=>"filter-web",
                    "title"=>" Web 3"
                    ]

                
        ]);
    
}
}