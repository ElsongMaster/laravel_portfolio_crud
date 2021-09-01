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
            $table->text('p2')->nullable();
            $table->string('img');
            $table->string('birthday');
            $table->string('website')->nullable();
            $table->string('phone');
            $table->string('city');
            $table->integer('age');
            $table->string('degree')->nullable();          
            $table->string('email');           
            $table->string('freelance');
            $table->text('p3')->nullable();
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
