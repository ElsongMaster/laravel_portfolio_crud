<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('h3');
            $table->string('p2');
            $table->string('img');
            $table->string('ul1_li1_strong');
            $table->string('ul1_li1');
            $table->string('ul1_li2_strong');
            $table->string('ul1_li2');
            $table->string('ul1_li3_strong');
            $table->string('ul1_li3');
            $table->string('ul1_li4_strong');
            $table->string('ul1_li4');

            $table->string('ul2_li1_strong');
            $table->string('ul2_li1');
            $table->string('ul2_li2_strong');
            $table->string('ul2_li2');
            $table->string('ul2_li3_strong');
            $table->string('ul2_li3');
            $table->string('ul2_li4_strong');
            $table->string('ul2_li4');
            $table->string('p3');

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
        Schema::dropIfExists('abouts');
    }
}
