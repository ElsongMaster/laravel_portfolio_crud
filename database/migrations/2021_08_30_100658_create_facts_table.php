<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facts', function (Blueprint $table) {
            $table->id();
            $table->string("titre_h2");
            $table->string("p_description");
            $table->string("span1");
            $table->string("span2");
            $table->string("span3");
            $table->string("span4");
            $table->string("strong1");
            $table->string("strong2");
            $table->string("strong3");
            $table->string("strong4");
            $table->string("p1");
            $table->string("p2");
            $table->string("p3");
            $table->string("p4");

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
        Schema::dropIfExists('facts');
    }
}
