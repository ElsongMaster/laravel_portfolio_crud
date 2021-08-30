<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->id();
            $table->string("titre_h2");
            $table->string("p_description");
            $table->string("skill1");
            $table->integer("val1");
            $table->integer("valBar1");
            $table->string("skill2");
            $table->integer("val2");
            $table->integer("valBar2");
            $table->string("skill3");
            $table->integer("val3");
            $table->integer("valBar3");
            $table->string("skill4");
            $table->integer("val4");
            $table->integer("valBar4");
            $table->string("skill5");
            $table->integer("val5");
            $table->integer("valBar5");
            $table->string("skill6");
            $table->integer("val6");
            $table->integer("valBar6");
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
        Schema::dropIfExists('skills');
    }
}
