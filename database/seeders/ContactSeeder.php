<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('contacts')->insert([   
        [
            "titre_h2"=>"Contact",
                "p_description"=>"Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.",
            "info_h4"=>"Location",
            "info_p"=>"A108 Adam Street, New York, NY 535022",
        "email_h4"=>"Email",
            "email_p"=>"info@example.com",
        "phone_h4"=>"Call",
            "phone_p"=>"+1 5589 55488 55",
            "lbl_name1"=>"Your Name",
            "lbl_name2"=>"Your Email",
            "lbl_name3"=>"Subject",
            "lbl_name4"=>"Message",
            "div_loading"=>"Loading",
            "div_msg"=>"Your message has been sent. Thank you!",
            "btn"=>"Send Message"
         ],

    ]);
    }
}
