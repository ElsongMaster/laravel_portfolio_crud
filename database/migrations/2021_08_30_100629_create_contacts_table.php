<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string("titre_h2");
            $table->string("p_description");
            $table->string("info_h4");
            $table->string("info_p");
            $table->string("email_h4");
            $table->string("email_p");
            $table->string("phone_h4");
            $table->string("phone_p");
            $table->string("lbl_name1");
            $table->string("lbl_name2");
            $table->string("lbl_name3");
            $table->string("lbl_name4");
            $table->string("div_loading");
            $table->string("div_msg");
            $table->string("btn");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
