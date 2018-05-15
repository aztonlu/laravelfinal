<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEtapegalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etapegalleries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nameEtape');
            $table->integer('id_tour_gallery')->unsigned();
            $table->foreign('id_tour_gallery')
                            ->references('id')
                            ->on('tourgalleries')
                            ->onDelete('cascade');
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
        Schema::dropIfExists('etapegalleries');
    }
}
