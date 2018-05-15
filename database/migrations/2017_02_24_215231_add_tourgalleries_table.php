<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTourgalleriesTable extends Migration
{
    public function up()
    {
        Schema::create('tourgalleries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description', 60)->nullable();
            $table->integer('tour_id')->unsigned();
            $table->foreign('tour_id')
                        ->references('id')
                        ->on('tours')
                        ->ondelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tourgalleries');
        
    }
}
